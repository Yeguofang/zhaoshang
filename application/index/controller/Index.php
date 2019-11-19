<?php

namespace app\index\controller;

use app\admin\controller\general\Web;
use app\common\controller\Frontend;
use app\common\model\Category;
use think\db;
use app\index\controller\Jintai;

class Index extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {

         //是否有生成静态页面，有则访问静态页面
        $files =  parent::echoHtml('index/index');
        if($files != null){
            return  $this->view->fetch($files);
        }


        $menu = self::category('menu',9,9); //首页左侧分类,项目
        $index = self::category('index',8,27);   //首页分类，项目
        $navs = self::category('navs',8,4);   //首页导航，项目

        $advert_a = self::advert('A',6,80); //图文广告a
        $advert_b = self::advert('B',6,6);  //图文广告b
        $advert_c = self::advert('C',6,12); //图文广告c
        $advert_d = self::advert('D',8,8);  //图文广告d
        $advert_e = self::advert('E',6,6);  //图文广告e

        $article_count =db::name('article')->whereNull('deletetime')->where('switch',1)->count(); //文章数量   
        $project_count = db::name('project')->whereNull('deletetime')->where('switch',1)->count(); //项目数量
        $user_count = db::name('user')->count();//用户数量
        $user_msg = db::name('message')->count();//用户数量


        $article = self::article('index',8,11); //首页文章

        $slide= db::name('advert')
                ->field('id,title,url,image')
                ->where('switch',1)
                ->where('flag', 'like', "%S%")
                ->limit(6)
                ->select();

        $help = db::name('help')->where('switch',1)->whereNull('deletetime')->field('id,title')->select();

        $this->assign([
            'advert_a' =>$advert_a,
            'advert_b' =>$advert_b,
            'advert_c' =>$advert_c,
            'advert_d' =>$advert_d,
            'advert_e' =>$advert_e,
            'user_count' =>$user_count,
            'article_count' =>$article_count,
            'project_count' =>$project_count,
            'help' =>$help,
            'slide' =>$slide,
            'navs' =>$navs,
            'index' => $index,
            'menu' => $menu,
            'article' => $article,
            'user_msg' =>$user_msg,
        ]);


     
        //是否手机端访问
        $temp = 'index/index.html';
        if(request()->isMobile()){
            $temp ='mobile/index/index.html';
        }
        //生成静态页面
        $this->buildHtml('index','index',$temp);

    }


    /**
     * 帮助
     * @return array
     */
    public function help()
    {

         //是否有生成静态页面，有则访问静态页面
         $files = $this->echoHtml('index/help');
         if($files != null){
             return  $this->view->fetch($files);
         }


        $data = db::name('help')->where('switch',1)->whereNull('deletetime')->select();
        $this->assign('data',$data);


        //是否手机端访问
        $temp = 'index/help.html';
        if(request()->isMobile()){
            $temp ='mobile/index/help.html';
        }
        //生成静态页面
        $this->buildHtml('help','index',$temp);
    }



    /**
     * 图片广告
     * @return array
     */
    public function link(){

        $image = $this->request->param('image');
        $text = $this->request->param('text');
        $path = '';
        $page = 'link';
        if($image !=null){
            $path = "image";
            $page = $image;
        }
        if($text !=null){
            $path = "text";
            $page = $text;
       }
       $files = $this->echoHtml('link/'.$path.'/'.$page);
        if($files != null){
            return  $this->view->fetch($files);
        }

        //文字广告
        $text =  db::name('advert')
            ->field('id,title,image,url')
            ->where('type', 0)
            ->where('switch', 1)
            ->order('createtime desc')
            ->paginate(1, false, ['var_page'=>'text','type'=>'defult']);

        //图片广告
        $image =  db::name('advert')
            ->field('id,title,image,url')
            ->where('type',1)
            ->where('switch',1)
            ->order('createtime desc')
            ->paginate(1,false,['var_page'=>'image','type'=>'defult']);

        
        //热门项目
        $project['hot'] = db::name('project')
            ->field('id,name,views')
            ->where('switch',1)
            ->where('flag', 'like', "%hot%")
            ->order('weigh desc')
            ->limit(15)
            ->select();
        //推荐项目
        $project['rec'] = db::name('project')
            ->field('id,name,views')
            ->where('switch',1)
            ->where('flag', 'like', "%recommend%")
            ->order('weigh desc')
            ->limit(15)
            ->select();
        $this->assign([
            'project' => $project,
            'text' =>$text,
            'image' =>$image,
        ]);

        //是否手机端访问
        $temp = 'index/link.html';
        if(request()->isMobile()){
            $temp ='mobile/index/link.html';
        }
        //生成静态页面
        $this->buildHtml($page,'link/'.$path.'/',$temp);

    }



    //项目搜索
    public function search(){

       $type =  $this->request->param('type');
       $keyword =  $this->request->param('keyword');


       //搜索文章资讯
       if($type == 'article'){
        $data = db::name('article')
            ->where('title','like',"%".$keyword."%")
            ->paginate(2,false,['type'=>'defult','query' => ['type' => $type,'keyword'=>$keyword]]);
            $this->assign('data',$data);

            
        //是否手机端访问
        if(request()->isMobile()){
            return $this->view->fetch('mobile/index/article_search');
        }
         return   $this->view->fetch('article_search');
       }



       //搜索项目
       if($type == 'project'){
        $project = db::name('project')
            ->where('name','like',"%".$keyword."%")
            ->paginate(2,false,['type'=>'defult','query' => ['type' => $type,'keyword'=>$keyword]]);

        $project_arr= $project->toArray();
        $p = $project_arr['data'];
        //处理地区；
        for ($i=0;$i<count($p);$i++) {
            if ($p[$i]['city'] != null) {
                $arr = explode(',',$p[$i]['city']);
                $p[$i]['city'] =[];
                for ($j=0;$j<count($arr);$j++) {
                    $shi = db::name('china')->where('id', $arr[$j])->find();
                    $shen = db::name('china')->where('id', $shi['parentid'])->find();
                    $p[$i]['city'][] = $shen['areaname']."-".$shi['areaname'];
                }
                $p[$i]['city'] = implode(' | ',$p[$i]['city']);
            } else {
                $p[$i]['city'] = "全国-全国各地";
            }
        }
        $this->assign('project', $project);
        $this->assign('projects', $p);

        
        //是否手机端访问
        if(request()->isMobile()){
            return $this->view->fetch('mobile/index/project_search');
        }
        return   $this->view->fetch('project_search');
       }
       
    }





    /**
     * 读取分类
     * @param string $flag   标志
     * @param int    $flag_number  分类数量
     * @param int    $limit  查询数量
     * @return array
     */
    public static function category($flag,$flag_number,$limit)
    {
        $menu =  Category::getCategoryIndex('project', 'normal', $flag,$flag_number);
        for ($i = 0; $i < count($menu); $i++) {
            // $menu[$i]['sum'] = Category::where('pid', $menu[$i]['id'])->where('status','normal')->where('flag', 'like',"%".$flag."%")->count();
            $menu_two = Db::name('category')->where('pid', $menu[$i]['id'])->where('status','normal')->where('flag', 'like',"%".$flag."%")->limit($flag_number)->select();

            if ($flag == 'menu' || $flag == 'navs') { //首页左侧菜单栏的二级分类下的项目
                for ($j=0;$j<count($menu_two);$j++) {
                    $menu_two[$j]['project'] = db::name('project')
                        ->field('id,name,image,category_id')
                        ->where('switch',1)
                        ->where('category_id', $menu_two[$j]['id'])
                        ->where('flag', 'like', "%".$flag."%")
                        ->limit($limit)
                        ->select();
                }
                $menu[$i]['nav'] = $menu_two;
            }

            if($flag == 'index'){   //首页一级栏目下的项目
                $index = Db::name('category')->where('pid', $menu[$i]['id'])->select();
                $ids = [];
                for ($j=0;$j<count($index);$j++) {
                    $ids[] += $index[$j]['id']; 
                }
                $menu[$i]['project'] = db::name('project')
                    ->field('id,name,image,category_id')
                    ->where('switch',1)
                    ->where('category_id', 'in',$ids)
                    ->where('flag', 'like', "%".$flag."%")
                    ->limit($limit)
                    ->select();

                $menu[$i]['nav'] = $menu_two;
            }
           
        }
        return $menu;
    }


      /**
     * 读取分类
     * @param string $flag   标志
     * @param int    $flag_number 分类查询数量
     * @param int    $limit  文章查询数量
     * @return array
     */
    public static function article($flag,$flag_number,$limit)
    {
        $category =  Category::getCategoryIndex('article', 'normal', $flag,$flag_number);
        for ($i = 0; $i < count($category); $i++) {
            $category[$i]['content'] = db::name('article')
                ->field('id,title,image,category_id,views')
                ->where('category_id',$category[$i]['id'])
                ->order('createtime desc')
                ->limit($limit)
                ->select();
        }
    
        return $category;
    }

    /**
     * 读取广告
     * @param string $flag   标志
     * @param int    $text_limit  文字广告查询数量
     * @param int    $img_limit  图片广告查询数量
     * @return array
     */
    public static function advert($flag,$text_limit,$img_limit){
        $result['text'] =  db::name('advert')
                ->field('id,title,image,url')
                ->where('flag', 'like', "%".$flag."%")
                ->where('type',0)
                ->where('switch',1)
                ->order('createtime desc')
                ->limit($text_limit)
                ->select();
        $result['image'] =  db::name('advert')
                ->field('id,title,image,url')
                ->where('flag', 'like', "%".$flag."%")
                ->where('type',1)
                ->where('switch',1)
                ->order('createtime desc')
                ->limit($img_limit)
                ->select();       
        return $result;
    } 
}
