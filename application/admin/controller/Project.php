<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\Category;
use fast\Tree;

/**
 * 项目管理
 *
 * @icon fa fa-circle-o
 */
class Project extends Backend
{


    protected $model = null;

    protected $multiFields = "switch";

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Project;
        $this->view->assign("flagList", $this->model->getFlagList());


        $tree = Tree::instance();
        $tree->init(Category::getCategoryArray('project', 'normal'), 'pid');
        $category = $tree->getTreeList($tree->getTreeArray(0), 'name');


        $this->assign('cate', $category);
    }
}
