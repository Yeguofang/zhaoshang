<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\Category;
use fast\Tree;

/**
 * 文章资讯管理
 *
 * @icon fa fa-circle-o
 */
class Article extends Backend
{


    protected $model = null;

    protected $multiFields = "switch";

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Article;
        $this->view->assign("flagList", $this->model->getFlagList());

        $tree = Tree::instance();
        $tree->init(Category::getCategoryArray('article', 'normal'), 'pid');
        $category = $tree->getTreeList($tree->getTreeArray(0), 'name');


        $this->assign('cate', $category);
    }
}
