<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 项目管理
 *
 * @icon fa fa-circle-o
 */
class Help extends Backend
{


    protected $model = null;

    protected $multiFields = "switch";

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Help;
       
    }
}
