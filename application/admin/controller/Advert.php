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
class Advert extends Backend
{


    protected $model = null;

    protected $multiFields = "switch";

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Advert;
        $this->view->assign("flagList", $this->model->getFlagList());
       
    }
}
