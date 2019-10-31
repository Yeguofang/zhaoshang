<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 项目留言管理
 * @icon fa fa-circle-o
 */
class Comment extends Backend
{


    protected $model = null;
    protected $multiFields = "switch";
    protected $relationSearch = true; //关联查询

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Comment;
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
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();

            $total = $this->model
                ->with(["article"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->with(["article"=>function($query){
                    $query->withField('title');
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



     /**
     * 回收站
     */
    public function recyclebin()
    {
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax()) {
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $total = $this->model
                ->onlyTrashed()
                ->with(["article"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->onlyTrashed()
                ->with(["article"=>function($query){
                    $query->withField('title');
                }])
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
