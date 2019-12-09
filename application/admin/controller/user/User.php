<?php

namespace app\admin\controller\user;

use app\common\controller\Backend;
use think\db;
/**
 * 会员管理
 *
 * @icon fa fa-user
 */
class User extends Backend
{

    protected $relationSearch = true;


    /**
     * @var \app\admin\model\User
     */
    protected $model = null;
    protected $multiFields = "status";  //开关字段

    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('User');
    }

    /**
     * 查看
     */
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
                ->with('group')
                ->where($where)
                ->order($sort, $order)
                ->count();
            $list = $this->model
                ->with('group')
                ->where($where)
                ->order($sort, $order)
                ->limit($offset, $limit)
                ->select();
            foreach ($list as $k => $v) {
                $v->hidden(['password', 'salt']);
            }
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }




    //添加
    public function add(){

        if($this->request->isPost()){
            $row = $this->request->param('row/a');
            $user = $this->model->where('company_name',$row['company_name'])->find();
            if($user != null){
               return $this->error('已存在该公司名称');
            }
            if(isset($row['company_desc'])){
                $row['company_desc'] = str_replace(config('http'),"",$row['company_desc']);
            }
            $row['status'] = 'normal';
            $row['createtime']  = time();
            $row['prevtime']  = time();
            $row['logintime']  = time();
            $row['jointime']  = time();
            $row['type'] = 2; //内部添加
           $res = $this->model->save($row);
            if($res > 0){
                return     $this->success('添加成功');
            }
            return  $this->error('添加失败');
        }
        return $this->fetch();
    }

    /**
     * 编辑
     */
    public function edit($ids = NULL)
    {
        $row = $this->model->get($ids);
        $user = \app\admin\model\UserGroup::column('id,name');
  
        $this->assign('user',$user );
        $this->assign('row',$row);

        parent::edit($ids);

        return $this->fetch();
    }



    //删除
    public function del($ids =null){
        $project = db::name('project')->where('company_id',$ids)->count();
        if($project > 0){
            $this->error('该公司还有项目数据，禁止删除！');
        }
        $article = db::name('article')->where('company_id',$ids)->count();
        if($article > 0){
            $this->error('该公司还有新闻数据，禁止删除！');
        }
        $advert = db::name('advert')->where('company_id',$ids)->count();
        if($advert > 0){
            $this->error('该公司还有广告数据，禁止删除！');
        }
        $row = $this->model->get($ids);
        $count_img =del_content_img($row->company_desc);//删除富文本的图片
        foreach($count_img as $v){
            db::name('attachment')->where('url',$v)->delete();
        } 
        $res = $row->delete();
        if($res > 0 ){
            $this->success('删除成功');
        }
        $this->error('删除失败！');

    }


   



}
