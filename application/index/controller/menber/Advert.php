<?php

namespace app\index\controller\menber;

use app\common\controller\Frontend;
use think\Db;

//文章咨询类
class Advert extends Frontend
{
    protected $noNeedLogin = [];
    protected $noNeedRight = [];



    public function list()
    {

        if ($this->request->isAjax()) {
            $row = $this->request->param();
            $res = db::name('advert')
                        ->where('admin_id', $this->auth->getUserinfo()['id'])
                        ->page($row['page'], $row['limit'])
                        ->order('id createtime')
                        ->select();
            $cuont = db::name('advert')->count();

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
            $cuont = db::name('advert')->count();

            for ($i=0;$i<count($res);$i++) {
                $name = db::name('advert')->where('id',$res[$i]['pid'])->field('name')->find();
                $res[$i]['pname']  = $name['name'];;
            }
            return tableData(0, 'ok ', $res, $cuont);
        }
        return $this->view->fetch();
    }


    //添加
    public function add($tid = null)
    {

        //获取二级市区数据
        if($tid != null){
            $area = db::name('china')->where('parentid', $tid)->field('id,areaname')->select();
            return $area;
        }

        //获取项目的分类
        $cate_one = self::category();
        //一级省区数据
        $area = db::name('china')->where('parentid', 1)->field('id,areaname')->select();

        $this->assign('area', $area);//省地区
        $this->assign('cate_one', $cate_one);//项目分类


        if ($this->request->isAjax()) {
            $admin_id = $this->auth->getUserinfo()['id'];
            $row = $this->request->post();
            $row['admin_id'] = $admin_id;
            $row['content'] = $_POST['content'];
            $row['createtime'] = time();
            $row['city'] = implode(',',$row['city']);
            unset($row['file']);

            $res = db::name('advert')->insert($row);
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

        $data = db::name('advert')->where('id', $id)->find();
        $data['city'] = explode(',',$data['city']);
        for($i=0;$i<count($data['city']);$i++){
            $data['city'][$i] = db::name('china')->where('id',$data['city'][$i])->field('id,areaname')->find();
        }
        //获取项目的分类
        $cate_one = self::category();
        //一级省区数据
        $area = db::name('china')->where('parentid', 1)->field('id,areaname')->select();

        $this->assign('area', $area);//省地区
        $this->assign('cate_one', $cate_one);//项目分类
        $this->assign('data', $data);
    
        if ($this->request->isAjax()) {
            $row = $this->request->post();
            unset($row['file']);
            $row['city'] = implode(',',$row['city']);
            $row['content'] = $_POST['content'];
            $row['image'] = oneImg($row['content']);//文章内容的一张图片作为缩略图
    
            $res = db::name('advert')->where('id', $id)->update($row);
            if ($res == 1) {
                return  $this->success('修改成功');
            }
            return $this->error('修改失败');
        }

        return $this->view->fetch();
    }


    public function del()
    {
        $ids = $this->request->param('ids');
        $data = db::name('advert')->where('id', 'in', $ids)->select();
        foreach ($data as $a) {
            del_content_img($a['content']);//删除富文本图片
        }
        $res = db::name('advert')->where('id', 'in', $ids)->delete();
    
        if ($res > 0) {
            return $this->success('删除成功');
        }
        return $this->error('删除失败');
    }

    public static function category(){
        $result = db::name('category')->where('type', 'advert')->where('pid', 0)->field('id,name')->select();
        for ($i=0;$i<count($result);$i++) {
            $result[$i]['two'] = db::name('category')->where('type', 'advert')->where('pid', $result[$i]['id'])->field('id,name')->select();
        }
        return $result;
    }
}
