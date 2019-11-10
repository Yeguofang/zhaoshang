<?php

namespace app\common\controller;

use app\common\library\Auth;
use think\Config;
use think\Db;
use think\Controller;
use think\Hook;
use think\Lang;
use think\Loader;
use think\Validate;
use app\common\model\WebTdk;
use app\common\model\Category;

/**
 * 前台控制器基类
 */
class Frontend extends Controller
{

    /**
     * 布局模板
     * @var string
     */
    protected $layout = '';

    /**
     * 无需登录的方法,同时也就不需要鉴权了
     * @var array
     */
    protected $noNeedLogin = [];

    /**
     * 无需鉴权的方法,但需要登录
     * @var array
     */
    protected $noNeedRight = [];

    /**
     * 权限Auth
     * @var Auth
     */
    protected $auth = null;

    public function _initialize()
    {
        //移除HTML标签
        $this->request->filter('trim,strip_tags,htmlspecialchars');
        $modulename = $this->request->module();
        $controllername = Loader::parseName($this->request->controller());
        $actionname = strtolower($this->request->action());

        // 如果有使用模板布局
        if ($this->layout) {
            $this->view->engine->layout('layout/' . $this->layout);
        }
        $this->auth = Auth::instance();

        // token
        $token = $this->request->server('HTTP_TOKEN', $this->request->request('token', \think\Cookie::get('token')));

        $path = str_replace('.', '/', $controllername) . '/' . $actionname;
        // 设置当前请求的URI
        $this->auth->setRequestUri($path);
        // 检测是否需要验证登录
        if (!$this->auth->match($this->noNeedLogin)) {
            //初始化
            $this->auth->init($token);
            //检测是否登录
            if (!$this->auth->isLogin()) {
                $this->error(__('Please login first'), 'index/user/login');
            }
            // 判断是否需要验证权限
            if (!$this->auth->match($this->noNeedRight)) {
                // 判断控制器和方法判断是否有对应权限
                if (!$this->auth->check($path)) {
                    $this->error(__('You have no permission'));
                }
            }
        } else {
            // 如果有传递token才验证是否登录状态
            if ($token) {
                $this->auth->init($token);
            }
        }

     

        $this->view->assign('user', $this->auth->getUser());

        //项目分类
        $project = Category::getCategoryIndex('project', 'normal', 'top');
        //资讯文章分类
        $article = Category::getCategoryIndex('article', 'normal', 'top');
        //用于控制首页不显示文章资讯的分类
        $url = $this->request->controller()  . $this->request->action();
        //网站信息
        $web = db::name('web_config')->where('id',1)->find();
        
        if($web['web_status'] == 0){    //关闭网站
           return $this->fetch();
        }

        $tdk = WebTdk::all();

        $this->assign('tdk', $tdk);
        $this->assign('web', $web);
        $this->assign('url', $url);
        $this->assign('project_cate', $project);
        $this->assign('article_cate', $article);

     
    
    }

 

    /**
     * 渲染配置信息
     * @param mixed $name  键名或数组
     * @param mixed $value 值
     */
    protected function assignconfig($name, $value = '')
    {
        $this->view->config = array_merge($this->view->config ? $this->view->config : [], is_array($name) ? $name : [$name => $value]);
    }

    /**
     * 刷新Token
     */
    protected function token()
    {
        $token = $this->request->post('__token__');

        //验证Token
        if (!Validate::is($token, "token", ['__token__' => $token])) {
            $this->error(__('Token verification error'), '', ['__token__' => $this->request->token()]);
        }

        //刷新Token
        $this->request->token();
    }




    /**
    * 创建静态页面
    * @access protected
    * @htmlfile 生成的静态文件名称
    * @path 生成的静态文件路径
    * @param string $templateFile 指定要调用的模板文件
    * 默认为空 由系统自动定位模板文件
    * @return string
    */
    protected  function buildHtml($htmlfile = '', $path = '', $templateFile = '')
    {

        //是否手机端访问
        if(request()->isMobile()){
            $htmlpath = ROOT_PATH.'public/template/mobile/'. $path.'/';
        }else{
            $htmlpath =ROOT_PATH.'public/template/pc/'. $path.'/';
        }
        $content = $this->fetch(APP_PATH.'index/view/'.$templateFile);
        $htmlpath = !empty($htmlpath) ? $htmlpath : './template/';
        $htmlfile = $htmlpath . $htmlfile . '.html';
        $File = new  \think\template\driver\File();
        $File->write($htmlfile, $content);
        echo  $content;
    }


    /**
    * 判断静态页面是否存在
    * @return string    $thmlFile   文件路径
    */
    protected  function echoHtml($htmlFile = '')
    {
        //是否手机端访问
        if(request()->isMobile()){
            $file = ROOT_PATH.'public/template/mobile/'.$htmlFile.".html";
        }else{
            $file = ROOT_PATH.'public/template/pc/'.$htmlFile.".html";
        }
        if(file_exists($file)){
           return  $file;
        }
        return null;
    }
}
