<?php

namespace app\index\controller;

use app\admin\controller\general\Web;
use app\common\controller\Frontend;
use app\common\model\Category;
use app\common\model\WebTdk;
use think\db;

class Index extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        $tdk = WebTdk::get(1);
        $menu = self::category('menu',9); //首页左侧分类,项目
        $index = self::category('index',8);   //首页分类，项目
        $navs = self::category('navs',8);   //首页分类，项目
        $advert_a = self::advert('A',6,80);
        $advert_b = self::advert('B',6,6);
        $advert_c = self::advert('C',6,12);
        $advert_d = self::advert('D',8,8);
        $advert_e = self::advert('E',6,6);


        $article = self::article('index',8);

        $this->assign([
            'advert_a' =>$advert_a,
            'advert_b' =>$advert_b,
            'advert_c' =>$advert_c,
            'advert_d' =>$advert_d,
            'advert_e' =>$advert_e,
            'navs' =>$navs,
            'index' => $index,
            'menu' => $menu,
            'article' => $article,
            'tdk' => $tdk
        ]);


        return $this->view->fetch();
    }


    /**
     * 帮助
     * @return array
     */
    public function help()
    {
        
        return $this->view->fetch();
    }



    /**
     * 图片广告
     * @return array
     */
    public function link(){

        //文字广告
        $text =  db::name('advert')
            ->field('id,title,image,url')
            ->where('type', 0)
            ->where('switch', 1)
            ->order('createtime desc')
            ->paginate(2, false, ['var_page'=>'text']);

        //图片广告
        $image =  db::name('advert')
            ->field('id,title,image,url')
            ->where('type',1)
            ->where('switch',1)
            ->order('createtime desc')
            ->paginate(2,false,['var_page'=>'image']);
        
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
        return $this->view->fetch();
    }




    /**
     * 读取分类
     * @param string $flag   标志
     * @param int    $limit  查询数量
     * @return array
     */
    public static function category($flag,$limit)
    {
        $menu =  Category::getCategoryIndex('project', 'normal', $flag,$limit);
        for ($i = 0; $i < count($menu); $i++) {
            $menu[$i]['sum'] = Category::where('pid', $menu[$i]['id'])->where('flag', 'like',"%".$flag."%")->count();
            $menu_two = Db::name('category')->where('pid', $menu[$i]['id'])->where('flag', 'like',"%".$flag."%")->select();

            if ($flag == 'menu' || $flag == 'navs') { //首页左侧菜单栏的二级分类下的项目
                for ($j=0;$j<count($menu_two);$j++) {
                    $menu_two[$j]['project'] = db::name('project')
                        ->field('id,name,image')
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
                    ->field('id,name,image')
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
     * @param int    $limit  查询数量
     * @return array
     */
    public static function article($flag,$limit)
    {
        $category =  Category::getCategoryIndex('article', 'normal', $flag,$limit);
        for ($i = 0; $i < count($category); $i++) {
            $category[$i]['content'] = db::name('article')
                ->field('id,title,image')
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
