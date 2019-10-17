<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Project extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        return $this->view->fetch();
    }

    public function detail()
    {
      return $this->view->fetch();
    }

    public function ranking(){
        return $this->view->fetch();
    }

}
