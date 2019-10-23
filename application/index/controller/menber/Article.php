<?php

namespace app\index\controller\menber;

use app\common\controller\Frontend;
use think\Db;

//文章咨询类
class Article extends Frontend
{
    protected $noNeedLogin = '';
    protected $noNeedRight = '';



    public function list()
    {
        if ($this->request->isAjax()) {
            $row = $this->request->param();
            $res = db::name('article')
                        ->where('admin_id', $this->auth->getUserinfo()['id'])
                        ->page($row['page'], $row['limit'])
                        ->order('id createtime')
                        ->select();
            $cuont = db::name('article')->count();

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


    public function comment(){
        if ($this->request->isAjax()) {
            $row = $this->request->param();
            $res = db::name('comment')
                        ->where('admin_id', $this->auth->getUserinfo()['id'])
                        ->page($row['page'], $row['limit'])
                        ->order('id create_time')
                        ->select();
            $cuont = db::name('comment')->count();
            for ($i=0;$i<count($res);$i++) {
                $name = db::name('artiicle')->where('id',$res[$i]['pid'])->field('title')->find();
                $res[$i]['title']  = $name['title'];;
            }

            return tableData(0, 'ok ', $res, $cuont);
        }
        return $this->view->fetch();
    }


    //添加
    public function add()
    {
        $cate_one = db::name('category')->where('type', 'article')->where('pid', 0)->field('id,name')->select();
        for ($i=0;$i<count($cate_one);$i++) {
            $cate_one[$i]['two'] = db::name('category')->where('type', 'article')->where('pid', $cate_one[$i]['id'])->field('id,name')->select();
        }
      
        if ($this->request->isAjax()) {
            $admin_id = $this->auth->getUserinfo()['id'];
            $row = $this->request->post();
	    $row['admin_id'] = $admin_id;
	    $row['content'] = $_POST['content'];

            $row['image'] = oneImg($row['content']);//文章内容的一张图片作为缩略图
    
            $res = db::name('article')->insert($row);
            if ($res == 1) {
                return  $this->success('发布成功');
	    }
	    return $this->error('发布失败');
        }
        
        $this->assign('cate_one', $cate_one);
        return $this->view->fetch();
    }


    public function edit($id = null)
    {

	$cate_one = db::name('category')->where('type', 'article')->where('pid', 0)->field('id,name')->select();
        for ($i=0;$i<count($cate_one);$i++) {
            $cate_one[$i]['two'] = db::name('category')->where('type', 'article')->where('pid', $cate_one[$i]['id'])->field('id,name')->select();
	}
	$data = db::name('article')->where('id',$id)->find();
	
	if ($this->request->isAjax()) {
		$row = $this->request->post();
		$row['content'] = $_POST['content'];
    
		$row['image'] = oneImg($row['content']);//文章内容的一张图片作为缩略图
	
		$res = db::name('article')->where('id',$id)->update($row);
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
	$data = db::name('article')->where('id', 'in', $ids)->select();
	foreach($data as $a){
		del_content_img($a['content']);//删除富文本图片
	}
	$res = db::name('article')->where('id', 'in', $ids)->delete();
	
        if ($res > 0) {
            return $this->success('删除成功');
        }
        return $this->error('删除失败');
    }
}
