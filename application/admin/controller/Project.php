<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\Category;
use fast\Tree;
use think\db;

/**
 * 项目管理
 *
 * @icon fa fa-circle-o
 */
class Project extends Backend
{


    protected $model = null;
    protected $relationSearch = true; //开启关联查询
    protected $multiFields = "switch";  //开关字段
    protected $noNeedLogin = [];    //不需要登录能访问的方法
    protected $noNeedRight = ['search'];     //不用权限但要登录后能访问的方法
    protected $searchCate = []; //存放分类数据


    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Project;
        $this->view->assign("flagList", $this->model->getFlagList());

        $tree = Tree::instance();
        $tree->init(Category::getCategoryArray('project', 'normal'), 'pid');
        $this->searchCate = $tree->getTreeList($tree->getTreeArray(0), 'name');

        $this->assign('cate', $this->searchCate);
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
                ->with(["category"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->with(["category"=>function($query){
                    $query->withField('name,type,flag');
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
            list($where, $sort, $order, $offset, $limit) = $this->buildparams('name');
            $total = $this->model
                ->onlyTrashed()
                ->with(["category"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->onlyTrashed()
                ->with(["category"=>function($query){
                    $query->withField('name,type,flag');
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



    //用于表格筛选查询
    public function search(){
        $one = $this->searchCate;
        for($i=0;$i<count($one);$i++){
                $ids =[]; //存放二级分类的id
                for ($j=0;$j<count($one);$j++) {
                    if ($one[$j]['pid'] ===$one[$i]['id']) {
                        $ids[] = $one[$j]['id'];
                    }
                }
                if ($ids != null) {
                    //把二级id赋值给一级
                    $one[$i]['id'] = implode(',', $ids);
                }
        }
        return $one;
    }

}
