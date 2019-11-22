<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\Category;
use fast\Tree;
use think\db;

use function GuzzleHttp\json_encode;

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
    protected $noNeedRight = ['search,flag_edit'];     //不用权限但要登录后能访问的方法
    protected $searchCate = []; //存放分类数据


    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Project;
        $this->view->assign("flagList", $this->model->getFlagList());

        $tree = Tree::instance();
        $tree->init(Category::getCategoryArray('project', 'normal'), 'pid');
        $this->searchCate = $tree->getTreeList($tree->getTreeArray(0), 'name');

        $province = db::name('china')->where('parentid', 1)->select();

        $this->assign('province', $province);
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

        if ($this->request->isAjax()) {
            $row = $this->request->param('row/a');
            $row['city'] = implode(',',$row['city']);
            $res = $this->model->save($row);
            if($res == 1){
               return  $this->success('添加成功');
            }
            return $this->error('添加失败');
        }
        return $this->view->fetch();
    }



    //添加的时候公司搜索
    public function company(){
        $name = $this->request->param('company_name');
        $page = $this->request->param('pageNumber');

        if($name != null){
            $user = db::name('user')->where('company_name','like','%'.$name.'%')->field('id,company_name')->page($page,10)->select();
            $count =   db::name('user')->where('company_name','like','%'.$name.'%')->count();
            $arr = ['list' => $user,'total' => $count];
            return $arr;
        }
        $user = db::name('user')->where('type',2)->field('id,company_name')->page($page,10)->select();
        $count = db::name('user')->count();
        $arr = ['list' => $user,'total' => $count];
        return $arr;
    }


    //修改位置
    public function flag_edit(){
        $row = $this->request->param();
        $res = db::name('project')->where('id',$row['id'])->update(['flag' => $row['flag']]);
        if($res == 1){
             return  $this->success('修改成功');
        }
        return $this->error('修改失败');
    }



    //修改
    public function edit($ids =null){
        $data = $this->model->get($ids);
        //查询出招商地区
        $data->city = db::name('china')->where('id','in',$data->city)->field('id,areaname')->select();
        $user = db::name('user')->where('type',2)->field('id,company_name')->select();
        $data->address = db::name('china')->where('id',$data->address)->find();
        $this->assign('user',$user);
        $this->assign('row',$data);

        if ($this->request->isAjax()) {
            $row = $this->request->param('row/a');
            $row['city'] = implode(',',$row['city']);
            $res = $data->save($row);
            if($res == 1){
               return  $this->success('修改成功');
            }
            return $this->error('修改失败');
        }
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
                ->with(["category"])
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->onlyTrashed()
                ->with(["category" => function ($query) {
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
                $poster_img =del_content_img($v['poster']);//删除海报富文本的图片
                array_push($cont_img,$v['image']); 
                $count_img = array_merge($poster_img,$cont_img); //合并要删除的链接
                foreach($count_img as $i){
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



    //用于表格筛选查询
    public function search()
    {
        $one = $this->searchCate;
        for ($i = 0; $i < count($one); $i++) {
            $ids = []; //存放二级分类的id
            for ($j = 0; $j < count($one); $j++) {
                if ($one[$j]['pid'] === $one[$i]['id']) {
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


    //市区数据
    public function shiqu()
    {
        $parentid = $this->request->param('parentid');
        $result = db::name('china')->where('parentid', $parentid)->select();

        $data = [];
        foreach ($result as $v) {
            $arr['value'] = $v['id'];
            $arr['name'] = $v['areaname'];
            $data[] = $arr;
        }
        $this->success('', null, $data);
    }


   
}
