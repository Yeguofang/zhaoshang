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

        $article = self::article('index',8);

        $this->assign([
            'navs' =>$navs,
            'index' => $index,
            'menu' => $menu,
            'article' => $article,
            'tdk' => $tdk
        ]);


        return $this->view->fetch();
    }



    public function help()
    {
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
                        ->where('category_id', $menu_two[$j]['id'])
                        ->where('flag', 'like', "%".$flag."%")
                        ->limit(9)
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
                    ->where('category_id', 'in',$ids)
                    ->where('flag', 'like', "%".$flag."%")
                    ->limit(9)
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
                ->limit(11)
                ->select();
        }
    
        return $category;
    }
}
