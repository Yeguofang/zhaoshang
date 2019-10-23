<?php

namespace app\index\controller\menber;

use app\common\controller\Frontend;
use think\Db;

//文章咨询类
class Project extends Frontend
{
    protected $noNeedLogin = '';
    protected $noNeedRight = ['address'];



    public function list()
    {
        if ($this->request->isAjax()) {
            $row = $this->request->param();
            $res = db::name('project')
                        ->where('admin_id', $this->auth->getUserinfo()['id'])
                        ->page($row['page'], $row['limit'])
                        ->order('id createtime')
                        ->select();
            $cuont = db::name('project')->count();

            for ($i=0;$i<count($res);$i++) {
                $name = db::name('category')
                        ->field('a.name `name2`,c.name `name1`')
                        ->alias('a')
                        ->join('category c', 'a.pid=c.id')
                        ->where('a.id', $res[$i]['category_id'])
                        ->find();
                $res[$i]['cname']  = $name['name1']."－>".$name['name2'];
            }
            return tableData(0, 'ok ', $res, $cuont);
        }
        return $this->view->fetch();
    }


    //项目留言
    public function msg()
    {
        if ($this->request->isAjax()) {
            $row = $this->request->param();
            $res = db::name('message')
                        ->where('admin_id', $this->auth->getUserinfo()['id'])
                        ->page($row['page'], $row['limit'])
                        ->order('id create_time')
                        ->select();
            $cuont = db::name('project')->count();

            for ($i=0;$i<count($res);$i++) {
                $name = db::name('project')->where('id',$res[$i]['pid'])->field('name')->find();
                $res[$i]['pname']  = $name['name'];;
            }
            return tableData(0, 'ok ', $res, $cuont);
        }
        return $this->view->fetch();
    }



    public function address($tid)
    {
        $area = db::name('china')->where('parentid', $tid)->field('id,areaname')->select();
        return $area;
    }


    //添加
    public function add()
    {
        $cate_one = db::name('category')->where('type', 'project')->where('pid', 0)->field('id,name')->select();
        for ($i=0;$i<count($cate_one);$i++) {
            $cate_one[$i]['two'] = db::name('category')->where('type', 'project')->where('pid', $cate_one[$i]['id'])->field('id,name')->select();
        }
      
        $area = db::name('china')->where('parentid', 1)->field('id,areaname')->select();

        $this->assign('area', $area);//省地区
        $this->assign('cate_one', $cate_one);//项目分类


        if ($this->request->isAjax()) {
            $admin_id = $this->auth->getUserinfo()['id'];
            $row = $this->request->post();
            $row['admin_id'] = $admin_id;
            $row['content'] = $_POST['content'];
            $row['createtime'] = time();
            unset($row['file']);

            $res = db::name('project')->insert($row);
            if ($res == 1) {
                return  $this->success('发布成功');
            }
            return $this->error('发布失败');
        }
        

        return $this->view->fetch();
    }

    //编辑
    public function edit($id = null)
    {
        $cate_one = db::name('category')->where('type', 'project')->where('pid', 0)->field('id,name')->select();
        for ($i=0;$i<count($cate_one);$i++) {
            $cate_one[$i]['two'] = db::name('category')->where('type', 'project')->where('pid', $cate_one[$i]['id'])->field('id,name')->select();
        }
        $data = db::name('project')->where('id', $id)->find();
    
        if ($this->request->isAjax()) {
            $row = $this->request->post();
            unset($row['file']);
            $row['content'] = $_POST['content'];
            $row['image'] = oneImg($row['content']);//文章内容的一张图片作为缩略图
    
            $res = db::name('project')->where('id', $id)->update($row);
            if ($res == 1) {
                return  $this->success('修改成功');
            }
            return $this->error('修改失败');
        }
        $this->assign('cate_one', $cate_one);
        $this->assign('data', $data);

        return $this->view->fetch();
    }


    public function del()
    {
        $ids = $this->request->param('ids');
        $data = db::name('project')->where('id', 'in', $ids)->select();
        foreach ($data as $a) {
            del_content_img($a['content']);//删除富文本图片
        }
        $res = db::name('project')->where('id', 'in', $ids)->delete();
    
        if ($res > 0) {
            return $this->success('删除成功');
        }
        return $this->error('删除失败');
    }
}
