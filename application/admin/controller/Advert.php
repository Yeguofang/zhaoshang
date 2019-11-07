<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\Category;
use think\db;
/**
 * 项目管理
 *
 * @icon fa fa-circle-o
 */
class Advert extends Backend
{


    protected $model = null;

    protected $multiFields = "switch";
    protected $relationSearch = true; //开启关联查询

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Advert;
        $this->view->assign("flagList", $this->model->getFlagList());
       
    }


    public function index()
    {
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax()) {
            //如果发送的来源是Selectpage，则转发到Selectpage
            if ($this->request->request('keyField')) {
                return $this->selectpage();
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams('name');

            $total = $this->model
                ->with(["user"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->with(["user"=>function($query){
                    $query->withField('company_name,prevtime,logintime,jointime');
                }])
                ->where($where)
                ->order($sort, $order)
                ->limit($offset, $limit)
                ->select();

            $list = collection($list)->toArray();

            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }



    //添加
    public function add()
    {  
        $user = db::name('user')->where('type',2)->field('id,company_name')->select();
        $this->assign('user',$user);
        parent::add();
        return $this->view->fetch();
    }

    //修改
    public function edit($ids =null){
        $data = $this->model->get($ids);
        $user = db::name('user')->where('type',2)->field('id,company_name')->select();
        $this->assign('user',$user);
        $this->assign('row',$data);
        parent::edit($ids);
       return  $this->view->fetch();
    }


     /**
     * 回收站
     */
    public function recyclebin()
    {
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax()) {
            list($where, $sort, $order, $offset, $limit) = $this->buildparams('name');
            $total = $this->model
                ->onlyTrashed()
                ->with(["user"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->onlyTrashed()
                ->with(["user"])
                ->where($where)
                ->order($sort, $order)
                ->limit($offset, $limit)
                ->select();

            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }

}
