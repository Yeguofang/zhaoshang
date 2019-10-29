<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Db;

class Project extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';


    /**
     * 项目列表
     * @param int   $pid   一级分类的id
     * @param int   $id    二级分类的id
     * @return array
     */
    public function list($pid,$id = null)
    {
       
        $category= db::name('category')->where('type', 'project')->where('pid', $pid)->field('id,pid,name')->select();

        if($id !=null){
            $project = db::name('project')->where('category_id',$id)->paginate(10);
            $hot = db::name('project')->field('id,name,views')->where('category_id',$id)->where('flag', 'like',"%hot%")->limit(15)->order('weigh desc')->select();
            $recommend = db::name('project')->field('id,name,views')->where('category_id',$id)->where('flag', 'like',"%recommend%")->limit(15)->order('weigh desc')->select();
        }else{
            $id = array_column($category,'id');
            $project = db::name('project')->where('category_id','in',$id)->paginate(10);
            $hot = db::name('project')->field('id,name,views')->where('category_id','in',$id)->where('flag', 'like',"%hot%")->limit(15)->order('weigh desc')->select();
            $recommend = db::name('project')->field('id,name,views')->where('category_id','in',$id)->where('flag', 'like',"%recommend%")->limit(15)->order('weigh desc')->select();
       
        }

        $project_arr= $project->toArray();
        $p = $project_arr['data'];
        for($i=0;$i<count($p);$i++){
            if ($p[$i]['city'] != null) {
                $shi = db::name('china')->where('id', $p[$i]['city'])->find();
                $shen = db::name('china')->where('id', $shi['parentid'])->find();
                $p[$i]['city'] = $shen['areaname']."-".$shi['areaname'];
            }else{
                $p[$i]['city'] = "全国-全国各地";
            }
        }

        $this->assign('category',$category);
        $this->assign('project',$project);
        $this->assign('hot',$hot);
        $this->assign('recommend',$recommend);
        $this->assign('projects',$p);

        return $this->view->fetch();
    }

    public function detail($id)
    {

        $data =  db::name('project')
                    ->alias('p')
                    ->field('p.id,p.name,p.price,p.image,p.phone,p.moblie,p.title,p.content,u.company_name,u.address,u.company_desc,c.name `cname`,b.name `bname`')
                    ->join('user u','p.admin_id=u.id')
                    ->join('category c', 'p.category_id=c.id')
                    ->join('category b','c.pid=b.id')
                    ->where('p.id',$id)
                    ->find();
                    
        $this->assign('data',$data);

      return $this->view->fetch();
    }

    public function ranking(){


        $one = Db::name('category')->where('type',"project")->where('pid', 0)->select();
        for ($i = 0; $i < count($one); $i++) {
            $index = Db::name('category')->where('pid', $one[$i]['id'])->select();
            $ids = [];
            for ($j=0;$j<count($index);$j++) {
                $ids[] += $index[$j]['id'];
            }
            $one[$i]['project'] = db::name('project')
                ->field('id,name,category_id,views')
                ->where('switch', 1)
                ->where('category_id', 'in', $ids)
                ->order('views desc')
                ->limit(10)
                ->select();
        }
       $this->assign('data',$one);
        return $this->view->fetch();
    }

}
