<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\Category;
use fast\Tree;
use think\db;

/**
 * 文章资讯管理
 *
 * @icon fa fa-circle-o
 */
class Article extends Backend
{


    protected $model = null;

    protected $multiFields = "switch";
    protected $relationSearch = true;//关联查询
    protected $noNeedLogin = [];    //不需要登录能访问的方法
    protected $noNeedRight = ['search,flag_edit'];     //不用权限但要登录后能访问的方法
    protected $searchCate = []; //存放分类数据

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Article;
        $this->view->assign("flagList", $this->model->getFlagList());

        $tree = Tree::instance();
        $tree->init(Category::getCategoryArray('article', 'normal'), 'pid');
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
            list($where, $sort, $order, $offset, $limit) = $this->buildparams('title');

            $total = $this->model
                ->with(['category','user'])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->with(['category','user'])
                ->where($where)
                ->order($sort, $order)
                ->limit($offset, $limit)
                ->select();

                
            $list = collection($list)->toArray();
            for($i=0;$i<count($list);$i++){
                $list[$i]['flag_data'] = $this->model->getFlagList();
            }

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

        //修改位置
        public function flag_edit(){
            $row = $this->request->param();
            $res = db::name('article')->where('id',$row['id'])->update(['flag' => $row['flag']]);
            if($res == 1){
                 return  $this->success('修改成功');
            }
            return $this->error('修改失败');
        }
    


     /**
     * 回收站
     */
    public function recyclebin()
    {
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax()) {
            list($where, $sort, $order, $offset, $limit) = $this->buildparams('title');
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


    /**
     * 真实删除
     */
    public function destroy($ids = "")
    {
        $pk = $this->model->getPk();
        $adminIds = $this->getDataLimitAdminIds();
        if (is_array($adminIds)) {
            $this->model->where($this->dataLimitField, 'in', $adminIds);
        }
        if ($ids) {
            $this->model->where($pk, 'in', $ids);
        }
        $count = 0;
        Db::startTrans();
        try {
            $list = $this->model->onlyTrashed()->select();
            foreach ($list as $k => $v) {
                img_file_del($v['image'],'111');  //删除缩略图
                $cont_img = del_content_img($v['content']);//删除富文本内容的图片
                array_push($cont_img,$v['image']);
                foreach($cont_img as $i){
                    db::name('attachment')->where('url',$i)->delete();
                } 
                $count += $v->delete(true); //删除数据
            }
            Db::commit();
        } catch (PDOException $e) {
            Db::rollback();
            $this->error($e->getMessage());
        } catch (Exception $e) {
            Db::rollback();
            $this->error($e->getMessage());
        }
        if ($count) {
            $this->success();
        } else {
            $this->error(__('No rows were deleted'));
        }
        $this->error(__('Parameter %s can not be empty', 'ids'));
    }


    //用于筛选
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
