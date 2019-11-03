<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Db;
use think\Validate;

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
    public function list($pid, $id = null)
    {
        $category= db::name('category')->where('type', 'project')->where('pid', $pid)->field('id,pid,name')->select();

        if ($id !=null) {
            $project = db::name('project')->where('category_id', $id)->paginate(10);
            $hot = db::name('project')->field('id,name,views')->where('category_id', $id)->where('flag', 'like', "%hot%")->limit(15)->order('weigh desc')->select();
            $recommend = db::name('project')->field('id,name,views')->where('category_id', $id)->where('flag', 'like', "%recommend%")->limit(15)->order('weigh desc')->select();
        } else {
            $id = array_column($category, 'id');
            $project = db::name('project')->where('category_id', 'in', $id)->paginate(10);
            $hot = db::name('project')->field('id,name,views')->where('category_id', 'in', $id)->where('flag', 'like', "%hot%")->limit(15)->order('weigh desc')->select();
            $recommend = db::name('project')->field('id,name,views')->where('category_id', 'in', $id)->where('flag', 'like', "%recommend%")->limit(15)->order('weigh desc')->select();
        }

        $project_arr= $project->toArray();
        $p = $project_arr['data'];
        //处理地区；
        for ($i=0;$i<count($p);$i++) {
            if ($p[$i]['city'] != null) {
                $arr = explode(',',$p[$i]['city']);
                $p[$i]['city'] =[];
                for ($j=0;$j<count($arr);$j++) {
                    $shi = db::name('china')->where('id', $arr[$j])->find();
                    $shen = db::name('china')->where('id', $shi['parentid'])->find();
                    $p[$i]['city'][] = $shen['areaname']."-".$shi['areaname'];
                }
                $p[$i]['city'] = implode(' | ',$p[$i]['city']);
            } else {
                $p[$i]['city'] = "全国-全国各地";
            }
        }

        $this->assign('category', $category);
        $this->assign('project', $project);
        $this->assign('projects', $p);
        $this->assign('hot', $hot);
        $this->assign('recommend', $recommend);
  

        return $this->view->fetch();
    }

    public function detail($id)
    {
        $project =  db::name('project')
                ->alias('p')
                ->field('p.id,p.name,p.price,p.image,p.phone,p.company_id,p.moblie,p.title,p.content,p.poster,u.company_name,u.address,u.company_desc,c.name `cname`,b.name `bname`')
                ->join('user u', 'p.company_id=u.id')
                ->join('category c', 'p.category_id=c.id')
                ->join('category b', 'c.pid=b.id')
                ->where('p.id', $id)
                ->find();
        
        $this->assign('data', $project);


        if ($this->request->isPost()) {
            $data = $this->request->param();
            $rule = [
                'name'  => 'require|length:2,10',
                'phone'  => 'require|length:11',
                'content'  => 'require|length:3,150',
                '__token__' => 'require|token',
            ];
            $res = [
                'name'  => $data['name'],
                'phone'  => $data['phone'],
                'content' => $data['content'],
                '__token__' => $data['token'],
                'company_id' =>$data['company_id'],
                'email' => $data['email'],
                'pid' =>$data['id'],
                'createtime' => time()
            ];
            $validate = new Validate($rule, [], ['name' => __('姓名不能为空，并且字符3-20之间'), 'phone' => __('电话号码为11位数'),'content' => __('内容不能空')]);
            $va = $validate->check($res);
            if (!$va) {
                $msg = $validate->getError();
                return $this->error($msg);
            }
            unset($res['__token__']);
            $msg = db::name('message')->where('phone',$data['phone'])->find();
            if($msg){
                $this->error('你已留言过了！');
            }
            $result =db::name('message')->insert($res);
            if ($result == 1) {
              return  $this->success('提交成功');
            }

        }

        return $this->view->fetch();
    }


    //项目排行
    public function ranking()
     {

        $one = Db::name('category')->where('type', "project")->where('pid', 0)->select();
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
        $this->assign('data', $one);
        return $this->view->fetch();
    }



    
}
