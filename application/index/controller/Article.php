<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\controller\Index;
use think\Validate; 
use think\db;
//文章咨询类
class Article extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = false;

    public function index()
    {


        // 是否有生成静态页面，有则访问静态页面
        $files = $this->echoHtml('article/index');
        if($files != null){
            return  $this->view->fetch($files);
        }

            
        $hot = self::getData('hot',3);
        $image =self::getData('img',10);   
        $slide =self::getData('slide',10);  
        $recommend =self::getData('recommend',14);  
        $home =  Index::article('home',6,10);


        $this->assign('home',$home);
        $this->assign('recommend',$recommend);
        $this->assign('slide',$slide);
        $this->assign('image',$image);
        $this->assign('hot',$hot);


    
    
        //是否手机端访问
        $temp = 'article/index.html';
        if(request()->isMobile()){
            $temp ='mobile/article/index.html';
        }
        //生成静态页面
        $this->buildHtml('index','article',$temp);
    }





    
    /**
     * 文章列表
     * @param int   $id    分类的id
     * @return array
     */
    public  function list($id = null){

        $page = $this->request->param('page');
        if($page == null){
            $page = 1;
        }
          //是否有生成静态页面，有则访问静态页面
        $files = $this->echoHtml('article/list/'.$id.'/'.$page);
        if($files != null){
            return  $this->view->fetch($files);
        }

        $name = db::name('category')->where('id',$id)->field('name')->find();
        $data = db::name('article')->where('category_id',$id)->where('switch',1)->paginate(1);
        $recommend =self::getData('recommend',15,$id); 
        $hot = self::getData('hot',15,$id);

        $this->assign('name',$name);
        $this->assign('recommend',$recommend);
        $this->assign('hot',$hot);
        $this->assign('data',$data);

        $this->buildHtml($page,'article/list/'.$id.'/','article/list.html');
    }



     /**
     * 文章详情
     * @param int   $cid   分类的id
     * @param int   $id    文章的id
     * @return array
     */
    public  function detail($cid,$id){




        if ($this->request->isAjax()) {
            $phone = $this->request->param('phone');
            $content = $this->request->param('content');
            $token = $this->request->param('token');
            $aid = $this->request->param('id');
            $company_id = $this->request->param('company_id');

            $rule = [
                'phone'  => 'require|length:11',
                'content'  => 'require|length:3,100',
                // '__token__' => 'require|token',
            ];
            $res = [
                'phone'  => $phone,
                'content' => $content,
                // '__token__' => $token,
                'company_id' =>$company_id,
                'aid' =>$aid,
                'createtime' => time()
            ];
            
            $validate = new Validate($rule, [], ['phone' => __('电话号码为11位数'),'content' => __('内容不能空')]);
            $va = $validate->check($res);
            if (!$va) {
                $msg = $validate->getError();
                return $this->error($msg);
            }
            // unset($res['__token__']);
            $msg = db::name('comment')->where('phone',$phone)->find();
            if($msg){
                $this->error('你已评论过了！');
            }

            $result =db::name('comment')->insert($res);
            if ($result == 1) {
              return  $this->success('评论提交成功，正在审核...感谢参与！');
            }

        }



        //是否有生成静态页面，有则访问静态页面
        $files = $this->echoHtml('article/detail/'.$cid.'/'.$id);
        if($files != null){
            return  $this->view->fetch($files);
        }

        $data = db::name('article')
                ->alias('a')
                ->field('a.id,a.category_id,a.company_id,a.title,a.createtime,a.tdk_key,a.tdk_desc,a.content,c.name,u.company_name')
                ->join('category c','a.category_id=c.id','LEFT')
                ->join('user u','a.company_id=u.id','LEFT')
                ->where('a.id',$id)
                ->find();

        $data['comment'] = db::name('comment')->where('switch',1)->where('aid',$id)->select();

        //上一篇
        $prv = db::name('article')
                ->field('id,title,category_id')
                ->where('category_id',$cid)
                ->where('id','>',$id)
                ->order('id desc')
                ->limit(1)
                ->find();
        //下一篇
        $next = db::name('article')
                ->field('id,title,category_id')
                ->where('category_id',$cid)
                ->where('id','<',$id)
                ->order('id desc')
                ->limit(1)
                ->find();

        $recommend =self::getData('recommend',15,$cid); 
        $hot = self::getData('hot',15,$cid);

        $this->assign('recommend',$recommend);
        $this->assign('prv',$prv);
        $this->assign('next',$next);
        $this->assign('hot',$hot);
        $this->assign('data',$data);



       
        //是否手机端访问
        $temp = 'article/detail.html';
        if(request()->isMobile()){
            $temp ='mobile/article/detail.html';
        }
         //生成静态页面
         $this->buildHtml($id,'article/detail/'.$cid.'/',$temp);

    }



  /**
     * 读取分类
     * @param string $flag   标志
     * @param int    $limit  查询数量
     * @param int    $cid    分类id
     * @return array
     */
    public static function getData($flag,$limit,$cid = null){
       
        $where = $cid == null ? '': ['category_id' => $cid];

        $result = db::name('article')
                ->field('id,title,image,desc,views,category_id')
                ->where($where)
                ->where('flag', 'like', "%".$flag."%")
                ->order('createtime desc')
                ->limit($limit)
                ->select();
        return $result;
    }

}
