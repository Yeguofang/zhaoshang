<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use think\Config;
use think\db;
use app\admin\controller\Project;
use app\admin\controller\Article;

/**
 * 控制台
 *
 * @icon fa fa-dashboard
 * @remark 用于展示当前系统中的统计数据、统计报表及重要实时数据
 */
class Dashboard extends Backend
{

    /**
     * 查看
     */
    public function index()
    {
        $seventtime = \fast\Date::unixtime('day', -7);
        $paylist = $createlist = [];
        for ($i = 0; $i < 7; $i++)
        {
            $day = date("Y-m-d", $seventtime + ($i * 86400));
            $createlist[$day] = mt_rand(20, 200);
            $paylist[$day] = mt_rand(1, mt_rand(1, $createlist[$day]));
        }
        $hooks = config('addons.hooks');
        $uploadmode = isset($hooks['upload_config_init']) && $hooks['upload_config_init'] ? implode(',', $hooks['upload_config_init']) : 'local';
        $addonComposerCfg = ROOT_PATH . '/vendor/karsonzhang/fastadmin-addons/composer.json';
        Config::parse($addonComposerCfg, "json", "composer");
        $config = Config::get("composer");
        $addonVersion = isset($config['version']) ? $config['version'] : __('Unknown');



        $po = new Project();
        $cate = $po->search();
        $category = [];
        foreach ($cate as $key => $v) {
            if($v['pid'] == 0){
                $v['sum'] = db::name('project')->where('category_id','in',$v['id'])->count();
                $category[] = $v;
            }
        }


        $art = new Article();
        $art_cate = $art->search();
        $art_data = [];
        foreach ($art_cate as $key => $v) {
            if($v['pid'] == 0){
                $v['sum'] = db::name('article')->where('category_id',$v['id'])->count();
                $art_data[] = $v;
            }
        }

        $user['outer'] = db::name('user')->where('type',1)->count();//外部注册公司
        $user['inner'] = db::name('user')->where('type',2)->count();//内部注册公司
        
        $article['text'] = db::name('article')->count();    //新闻数量
        $article['comment'] = db::name('comment')->count();  //新闻评论数量

        $project['data'] = db::name('project')->count();    //项目数量  
        $project['msg'] = db::name('message')->count();     //项目留言数量

        $advert['text'] = db::name('advert')->where('type',0)->count(); //文字广告
        $advert['image'] =db::name('advert')->where('type',1)->count();  //图片广告

        $file['number'] =db::name('attachment')->count();       //文件数量  
        $file['size'] = db::name('attachment')->sum('filesize');    //文件大小
        $file['size']  =  round(round($file['size']/1024,2)/1024,2);

        //  //当天数据统计
        $today = [];
        $today[0][0] =Db::name('user')->where('type',1)->whereTime('createtime', 'today')->count();
        $today[0][1] =Db::name('user')->where('type',2)->whereTime('createtime', 'today')->count();
        $today[0][2] ="今日外部注册";
        $today[0][3] ="今日内部注册";

        $today[1][0] =Db::name('project')->whereTime('createtime', 'today')->count();
        $today[1][1] =Db::name('message')->whereTime('createtime', 'today')->count();
        $today[1][2] ="今日发布项目";
        $today[1][3] ="今日项目留言";

        $today[2][0] =Db::name('article')->whereTime('createtime', 'today')->count();
        $today[2][1] =Db::name('comment')->whereTime('createtime', 'today')->count();
        $today[2][2] ="今日发布新闻";
        $today[2][3] ="今日新闻评论";

        $today[3][0] =Db::name('advert')->where('type',0)->whereTime('createtime', 'today')->count();
        $today[3][1] =Db::name('advert')->where('type',1)->whereTime('createtime', 'today')->count();
        $today[3][2] ="今日发布文字广告";
        $today[3][3] ="今日发布图片广告";

        $today[4][0]=db::name('attachment')->whereTime('createtime', 'today')->count();
        $today[4][1] = db::name('attachment')->whereTime('createtime', 'today')->sum('filesize');
        $today[4][1] =  round(round($today[4][1]/1024,2)/1024,3)."/M";
        $today[4][2] ="今日上传文件量";
        $today[4][3] ="今日上传文件大小";

        

        $this->view->assign([
            'user'             => $user,
            'article'          => $article,
            'project'          => $project,
            'advert'           => $advert,
            'file'             => $file,
            'category'         => $category,
            'art_data'         => $art_data,       
            'today'            => $today,
            'paylist'          => $paylist,
            'createlist'       => $createlist,
            'addonversion'       => $addonVersion,
            'uploadmode'       => $uploadmode
        ]);

        return $this->view->fetch();
    }





   

}
