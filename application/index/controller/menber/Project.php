<?php

namespace app\index\controller\menber;

use app\common\controller\Frontend;
use app\common\model\Message;
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
                        ->where('company_id', $this->auth->getUserinfo()['id'])
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
            $company_id = $this->auth->getUserinfo()['id'];
            $row = $this->request->post();
            unset($row['file']);
            $row['company_id'] = $company_id;
            $row['content'] = $_POST['content'];
            $row['poster'] = $_POST['poster'];
            $row['createtime'] = time();
            if ($row['image'] == null) {//没有缩略图
                $row['image'] = oneImg($row['content']);//文章内容的一张图片作为缩略图
            }
            $row['city'] = implode(',',$row['city']);
           

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

        $data = db::name('project')->where('id', $id)->find();
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
            $row['poster'] = $_POST['poster'];
            $row['content'] = $_POST['content'];
            if ($row['image'] == null) {//没有缩略图
                $row['image'] = oneImg($row['content']);//文章内容的一张图片作为缩略图
            }
            img_file_del($data['image'],$row['image']);  //删除原来的缩略图
            $res = db::name('project')->where('id', $id)->update($row);
            if ($res == 1) {
                return  $this->success('修改成功');
            }
            return $this->error('修改失败');
        }

        return $this->view->fetch();
    }



    //删除
    public function del()
    {
        $ids = $this->request->param('ids');
        $data = db::name('project')->where('id', 'in', $ids)->select();
        foreach ($data as $a) {
            img_file_del($a['image'],'111');  //删除缩略图
            del_content_img($a['content']);//删除富文本图片
        }
        $res = db::name('project')->where('id', 'in', $ids)->delete();
    
        if ($res > 0) {
            return $this->success('删除成功');
        }
        return $this->error('删除失败');
    }



    //分类
    public static function category(){
        $result = db::name('category')->where('type', 'project')->where('pid', 0)->field('id,name')->select();
        for ($i=0;$i<count($result);$i++) {
            $result[$i]['two'] = db::name('category')->where('type', 'project')->where('pid', $result[$i]['id'])->field('id,name')->select();
        }
        return $result;
    }


    //项目留言
    public function msg()
    {
        if ($this->request->isAjax()) {
            $row = $this->request->param();
            $res = db::name('message')
                        ->where('company_id', $this->auth->getUserinfo()['id'])
                        ->whereNull('deletetime')
                        ->page($row['page'], $row['limit'])
                        ->order('id createtime')
                        ->select();
            $cuont = db::name('message')
                        ->whereNull('deletetime')
                        ->where('company_id', $this->auth->getUserinfo()['id'])
                        ->count();

            for ($i=0;$i<count($res);$i++) {
                $name = db::name('project')->where('id',$res[$i]['pid'])->field('name')->find();
                $res[$i]['pname']  = $name['name'];;
            }
            return tableData(0, 'ok ', $res, $cuont);
        }
        return $this->view->fetch();
    }

    //项目留言删除
    public function del_msg(){
        
        if ($this->request->isAjax()) {
            $ids = $this->request->param('ids');
            $list = Message::all($ids);
            $count = 0;
            Db::startTrans();
            try {
                foreach ($list as $k => $v) {
                    $count += $v->delete();
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
                return $this->success('删除成功');
            } else {
                return $this->error('删除失败');
            }
            
        }

    }


}
