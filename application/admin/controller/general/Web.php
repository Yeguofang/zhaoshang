<?php

namespace app\admin\controller\general;

use app\common\controller\Backend;
use think\db;

/**
 * 前台 配置
 *
 * @icon fa fa-cogs
 */
class Web extends Backend
{
    protected $model = null;
    protected $noNeedRight = ['check'];

    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('web_config');
    }

    /**
     * 查看
     */
    public function index()
    {
        $web_data = $this->model->get(1);   //网站配置
        $tdk_data = Db::name('web_tdk')->select(); //ｔｄｋ
        $data =db::name('web_sm')->select();    //申明。关于。投诉

        $this->assign('sm',$data);
        $this->assign('tdk', $tdk_data);
        $this->assign('date', $web_data);
        return $this->view->fetch();
    }

    /**
     * 编辑
     * @param null $ids
     */
    public function edit($ids = null)
    {
        if ($this->request->isPost()) {
            $row = $this->request->post("row/a");

            if ($row) {
                $res = $this->model->where('id', 1)->update($row);
                if ($res == 1) {
                    $this->success('修改成功！');
                }
                $this->error('修改失败！    ');
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
    }

    /**
     * 编辑
     * @param null $ids
     */
    public function tdk($ids = null)
    {
        if ($this->request->isPost()) {
            $row = $this->request->post("row/a");

            if ($row) {
                $res = model('web_tdk')->saveAll($row);
                if ($res > 0) {
                    $this->success('修改成功！');
                }
                $this->error('修改失败！    ');
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
    }

    public function sm($id){
        if ($this->request->isPost()) {
            $row = $this->request->post("content");
            $res = db::name('web_sm')->where('id',$id)->update(['content' => $row]);
            if ($res > 0) {
                $this->success('修改成功！');
            }
            $this->error('修改失败！');
        }
    }


}
