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
            $row['status'] = 'normal';
            $row['createtime']  = time();
            $row['prevtime']  = time();
            $row['logintime']  = time();
            $row['jointime']  = time();
            $row['type'] = 2; //内部添加
           $res = $this->model->save($row);
            if($res > 0){
                  $this->success('添加成功');
            }
              $this->error('添加失败');
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
        $groupList = build_select('row[group_id]', $user, $row['group_id'], ['class' => 'form-control selectpicker']);
        $this->assign('groupList',$groupList );
        $this->assign('row',$row);

        parent::edit($ids);

        return $this->fetch();
    }


   



}
