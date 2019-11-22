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


        $page = $this->request->param('page');
        if($page == null){
            $page = 1;
        }
        if($id ==null){
            $path = 'project/list/'.$pid;
        }else{
             $path = 'project/list/'.$pid.'/'.$id;
        }

        //是否有生成静态页面，有则访问静态页面
        $files = $this->echoHtml($path.'/'.$page);
        if($files != null){
            return  $this->view->fetch($files);
        }



        $category= db::name('category')->where('type', 'project')->where('pid', $pid)->field('id,pid,name')->select();
        $name1 = db::name('category')->where('id', $pid)->field('id,pid,name')->find();
        $name2 = db::name('category')->where('id', $id)->field('id,pid,name')->find();

        if ($id !=null) {
            //查询二级分类的项目
            $project = db::name('project')
                    ->alias('p')
                    ->field('p.id,p.address,p.name,p.keywords,p.description,p.city,p.price,p.moblie,p.prouse,p.image,c.areaname,c.areaname')
                    ->where('switch',1)
                    ->where('category_id', $id)
                    ->join('china c','p.address=c.id','LEFT')
                    ->paginate(10);

            $hot = db::name('project')
                    ->field('id,name,views')
                    ->where('switch',1)
                    ->where('category_id', $id)
                    ->where('flag', 'like', "%hot%")
                    ->limit(15)
                    ->order('weigh desc')
                    ->select();
            $recommend = db::name('project')
                    ->field('id,name,views')
                    ->where('switch',1)
                    ->where('category_id', $id)
                    ->where('flag', 'like', "%recommend%")
                    ->limit(15)
                    ->order('weigh desc')
                    ->select();
        } else {    
            //查询一级分类的项目
            $id = array_column($category, 'id');
            
            $project = db::name('project')
                    ->alias('p')
                    ->field('p.id,p.address,p.name,p.keywords,p.description,p.city,p.price,p.moblie,p.prouse,p.image,c.areaname')
                    ->where('switch',1)
                    ->where('category_id', 'in', $id)
                    ->join('china c','p.address=c.id','LEFT')
                    ->paginate(10);

            $hot = db::name('project')
                    ->field('id,name,views')
                    ->where('switch',1)
                    ->where('category_id', 'in', $id)
                    ->where('flag', 'like', "%hot%")
                    ->limit(15)
                    ->order('weigh desc')
                    ->select();
            $recommend = db::name('project')
                    ->field('id,name,views')
                    ->where('switch',1)
                    ->where('category_id', 'in', $id)
                    ->where('flag', 'like', "%recommend%")
                    ->limit(15)
                    ->order('weigh desc')
                    ->select();
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
            $p[$i]['msg'] = db::name('message')->where('pid',$p[$i]['id'])->count();
        }


        $this->assign('category', $category);
        $this->assign('project', $project);
        $this->assign('projects', $p);
        $this->assign('hot', $hot);
        $this->assign('recommend', $recommend);
        $this->assign('name1', $name1);
        $this->assign('name2', $name2);
  
        //是否手机端访问
        $temp = 'project/list.html';
        if(request()->isMobile()){
            $temp ='mobile/project/list.html';
        }
        //生成静态页面
        $this->buildHtml($page,$path,$temp);

    }



    //项目详情
    public function detail($id)
    {

        
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

        db::name('project')->where('id',$id)->setInc('views',1);
        

        //是否有生成静态页面，有则访问静态页面
        $files = $this->echoHtml('project/detail');
        if($files != null){
            return  $this->view->fetch($files);
        }


        $project =  db::name('project')
                ->alias('p')
                ->field('p.id,p.name,p.price,p.image,p.prouse,p.company_id,p.keywords,p.description,p.moblie,p.title,p.content,p.poster,u.company_name,u.address,u.company_desc,a.areaname,c.name `cname`,b.name `bname`')
                ->join('user u', 'p.company_id=u.id','LEFT')
                ->join('category c', 'p.category_id=c.id','LEFT')
                ->join('category b', 'c.pid=b.id','LEFT')
                ->join('china a', 'p.address=a.id','LEFT')
                ->where('p.id', $id)
                ->find();
        //统计留言
        $project['sum'] = db::name('message')->where('pid',$id)->count();

        $this->assign('data', $project);


        //是否手机端访问
        $temp = 'project/detail.html';
        if(request()->isMobile()){
            $temp ='mobile/project/detail.html';
        }
        //生成静态页面
        $this->buildHtml($id,'project/detail',$temp);
    }


    //项目排行
    public function ranking()
     {

        //是否有生成静态页面，有则访问静态页面
        $files = $this->echoHtml('project/ranking');
        if($files != null){
            return  $this->view->fetch($files);
        }

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

         //是否手机端访问
         $temp = 'project/ranking.html';
         if(request()->isMobile()){
             $temp ='mobile/project/ranking.html';
         }
         //生成静态页面
         $this->buildHtml('ranking','project',$temp);
    }



    
}
