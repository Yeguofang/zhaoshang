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
        $menu = self::cate('menu'); //首页左侧菜单
        $index = self::cate('index');   //首页热门项目

        $this->assign([
            'index' => $index,
            'menu' => $menu,
            'tdk' => $tdk
        ]);



        return $this->view->fetch();
    }

    public function help()
    {

        return $this->view->fetch();
    }

    public  static function cate($type)
    {
        $menu =  Category::getCategoryIndex('project', 'normal', $type);
        for ($i = 0; $i < count($menu); $i++) {
            $menu[$i]['sum'] = Category::where('pid', $menu[$i]['id'])->count();
            $menu[$i]['nav'] = Db::name('category')->where('pid', $menu[$i]['id'])->select();
        }
        return $menu;
    }
}
