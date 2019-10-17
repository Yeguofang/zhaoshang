<?php

namespace app\index\controller;

use app\common\controller\Frontend;

//文章咨询类
class Article extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = false;

    public function index()
    {
        return $this->view->fetch();
    }

    public  function list($id = null){
        return $this->view->fetch();
    }


    public  function detail($id = null){
        return $this->view->fetch();
    }

}
