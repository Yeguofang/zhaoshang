<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use fast\Random;
use think\Cache;
use think\Config;
use think\Db;
use think\Lang;

/**
 * Ajax异步请求接口
 * @internal
 */
class Ajax extends Backend
{

    protected $noNeedLogin = ['lang','wipecache'];
    protected $noNeedRight = ['*'];
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();

        //设置过滤方法
        $this->request->filter(['strip_tags', 'htmlspecialchars']);
    }

    /**
     * 加载语言包
     */
    public function lang()
    {
        header('Content-Type: application/javascript');
        $controllername = input("controllername");
        //默认只加载了控制器对应的语言名，你还根据控制器名来加载额外的语言包
        $this->loadlang($controllername);
        return jsonp(Lang::get(), 200, [], ['json_encode_param' => JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE]);
    }

    /**
     * 上传文件方法
     * @param file file     //上传的文件
     * @param string ueditor  //百度富文本上传的请求标识
     */
    public function upload($file = null,$ueditor = null)
    {
        Config::set('default_return_type', 'json');
        $file = $this->request->file('file');
        if (empty($file)) {
            $this->error(__('No file upload or server upload limit exceeded'));
        }

        //判断是否已经存在附件
        $sha1 = $file->hash();
        $extparam = $this->request->post();

        $upload = Config::get('upload');

        preg_match('/(\d+)(\w+)/', $upload['maxsize'], $matches);
        $type = strtolower($matches[2]);
        $typeDict = ['b' => 0, 'k' => 1, 'kb' => 1, 'm' => 2, 'mb' => 2, 'gb' => 3, 'g' => 3];
        $size = (int)$upload['maxsize'] * pow(1024, isset($typeDict[$type]) ? $typeDict[$type] : 0);
        $fileInfo = $file->getInfo();
        $suffix = strtolower(pathinfo($fileInfo['name'], PATHINFO_EXTENSION));
        $suffix = $suffix && preg_match("/^[a-zA-Z0-9]+$/", $suffix) ? $suffix : 'file';

        $mimetypeArr = explode(',', strtolower($upload['mimetype']));
        $typeArr = explode('/', $fileInfo['type']);

        //禁止上传PHP和HTML文件
        if (in_array($fileInfo['type'], ['text/x-php', 'text/html']) || in_array($suffix, ['php', 'html', 'htm'])) {
            $this->error(__('Uploaded file format is limited'));
        }
        //验证文件后缀
        if ($upload['mimetype'] !== '*' &&
            (
                !in_array($suffix, $mimetypeArr)
                || (stripos($typeArr[0] . '/', $upload['mimetype']) !== false && (!in_array($fileInfo['type'], $mimetypeArr) && !in_array($typeArr[0] . '/*', $mimetypeArr)))
            )
        ) {
            $this->error(__('Uploaded file format is limited'));
        }
        //验证是否为图片文件
        $imagewidth = $imageheight = 0;
        if (in_array($fileInfo['type'], ['image/gif', 'image/jpg', 'image/jpeg', 'image/bmp', 'image/png', 'image/webp']) || in_array($suffix, ['gif', 'jpg', 'jpeg', 'bmp', 'png', 'webp'])) {
            $imgInfo = getimagesize($fileInfo['tmp_name']);
            if (!$imgInfo || !isset($imgInfo[0]) || !isset($imgInfo[1])) {
                $this->error(__('Uploaded file is not a valid image'));
            }
            $imagewidth = isset($imgInfo[0]) ? $imgInfo[0] : $imagewidth;
            $imageheight = isset($imgInfo[1]) ? $imgInfo[1] : $imageheight;
        }
        $replaceArr = [
            '{year}'     => date("Y"),
            '{mon}'      => date("m"),
            '{day}'      => date("d"),
            '{hour}'     => date("H"),
            '{min}'      => date("i"),
            '{sec}'      => date("s"),
            '{random}'   => Random::alnum(16),
            '{random32}' => Random::alnum(32),
            '{filename}' => $suffix ? substr($fileInfo['name'], 0, strripos($fileInfo['name'], '.')) : $fileInfo['name'],
            '{suffix}'   => $suffix,
            '{.suffix}'  => $suffix ? '.' . $suffix : '',
            '{filemd5}'  => md5_file($fileInfo['tmp_name']),
        ];
        $savekey = $upload['savekey'];
        $savekey = str_replace(array_keys($replaceArr), array_values($replaceArr), $savekey);

        $uploadDir = substr($savekey, 0, strripos($savekey, '/') + 1);
        $fileName = substr($savekey, strripos($savekey, '/') + 1);
        //
        $splInfo = $file->validate(['size' => $size])->move(ROOT_PATH . '/public' . $uploadDir, $fileName);
        if ($splInfo) {
            $params = array(
                'admin_id'    => (int)$this->auth->id,
                'user_id'     => 0,
                'filesize'    => $fileInfo['size'],
                'imagewidth'  => $imagewidth,
                'imageheight' => $imageheight,
                'imagetype'   => $suffix,
                'imageframes' => 0,
                'mimetype'    => $fileInfo['type'],
                'url'         => $uploadDir . $splInfo->getSaveName(),
                'uploadtime'  => time(),
                'storage'     => 'local',
                'sha1'        => $sha1,
                'extparam'    => json_encode($extparam),
            );
            $attachment = model("attachment");
            $attachment->data(array_filter($params));
            $attachment->save();
            \think\Hook::listen("upload_after", $attachment);


            //如果是百度富文本上传文件的请求就按照百度富文本的规范返回数据
            if($ueditor  == 'ueditor'){
                $ueditor_data = [
                    'original'  => $fileInfo['name'],
                    'size'      => $fileInfo['size'],
                    'state'     => "SUCCESS",
                    'title'     => "",
                    'type'      => ".".$suffix,
                    'url'       => $uploadDir . $splInfo->getSaveName()
                ];
                return  $ueditor_data;
            }

            //普通的上传文件返回数据
            $this->success(__('Upload successful'), null, [
                'url' => $uploadDir . $splInfo->getSaveName()
            ]);
        } else {
            // 上传失败获取错误信息
            $this->error($file->getError());
        }
    }



    /**
     *  百度富文本上传文件
     */
    public function ue_upload()
    {

        Config::set('default_return_type', 'json');
        $file = $this->request->file('file');

        //获取远程抓取链接
        $file_yc = $this->request->post('file/a');
        //判断是否有远程抓取的图片链接
        if(isset($file_yc)){
            $arr =  ['list'=>[],'state'=>"SUCCESS"];
            foreach($file_yc as $v){
                $arr['list'][] = self::get_img($v);
            }
            return $arr;
        }
        
        if (empty($file)) {
            $this->error(__('No file upload or server upload limit exceeded'));
        }
        //调用上传文件方法
        $result = $this->upload($file,'ueditor');
        return $result;

    }



     //远程抓取url图片
     public static function get_img($url){

        $path= ROOT_PATH . 'public/uploads/'.date("Ymd");
        //判断目录存在否，存在给出提示，不存在则创建目录
        if (!is_dir($path)){  
            mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
        }
        
        $content = @file_get_contents($url);    //抓取图片内容

        //判断是否抓取成功
        if($content === false){
            $ueditor = [
                'original'  => "",
                'size'      => "",
                'source'    => $url,
                'state'     => "SUCCESS",   //抓取失败也要返回SUCCESS，百度富文本的js才会执行替换链接。这样返回的链接为空，文本内容的图片就会显示不出来。
                'title'     => "图片抓取失败",
                'url'       => "图片抓取失败"
            ];
            return $ueditor;
        }

        $file_name = md5(time().uniqid()).".png";    //图文件名
        $get_file = file_put_contents($path.'/'.$file_name, $content);  //抓取抓取成功把内容写入到新的图片文件
        $file_info = getimagesize($path.'/'.$file_name);    //获取图片的信息

        //插入上传记录到数据库
        $params = array(
            'admin_id'    => 1,
            'filesize'    => $get_file,
            'imagewidth'  => $file_info[0],
            'imageheight' => $file_info[1],
            'imagetype'   => "png",
            'mimetype'    => "image/png",
            'imageframes' => 0,
            'url'         => "/uploads/".date("Ymd")."/".$file_name,
            'createtime'  => time(),
        );
        db::name("attachment")->insert($params);

        //一定要按照百度富文本编辑器的返回数据规范，返回相应的数据内容
        $ueditor = [        
            'original'  => $file_name,
            'size'      => $get_file,
            'source'    => $url,
            'state'     => "SUCCESS",
            'title'     => "",
            'url'       => "/uploads/".date("Ymd")."/".$file_name
        ];

        return $ueditor;

    }









    /**
     * 通用排序
     */
    public function weigh()
    {
        //排序的数组
        $ids = $this->request->post("ids");
        //拖动的记录ID
        $changeid = $this->request->post("changeid");
        //操作字段
        $field = $this->request->post("field");
        //操作的数据表
        $table = $this->request->post("table");
        //主键
        $pk = $this->request->post("pk");
        //排序的方式
        $orderway = $this->request->post("orderway", "", 'strtolower');
        $orderway = $orderway == 'asc' ? 'ASC' : 'DESC';
        $sour = $weighdata = [];
        $ids = explode(',', $ids);
        $prikey = $pk ? $pk : (Db::name($table)->getPk() ?: 'id');
        $pid = $this->request->post("pid");
        //限制更新的字段
        $field = in_array($field, ['weigh']) ? $field : 'weigh';

        // 如果设定了pid的值,此时只匹配满足条件的ID,其它忽略
        if ($pid !== '') {
            $hasids = [];
            $list = Db::name($table)->where($prikey, 'in', $ids)->where('pid', 'in', $pid)->field("{$prikey},pid")->select();
            foreach ($list as $k => $v) {
                $hasids[] = $v[$prikey];
            }
            $ids = array_values(array_intersect($ids, $hasids));
        }

        $list = Db::name($table)->field("$prikey,$field")->where($prikey, 'in', $ids)->order($field, $orderway)->select();
        foreach ($list as $k => $v) {
            $sour[] = $v[$prikey];
            $weighdata[$v[$prikey]] = $v[$field];
        }
        $position = array_search($changeid, $ids);
        $desc_id = $sour[$position];    //移动到目标的ID值,取出所处改变前位置的值
        $sour_id = $changeid;
        $weighids = array();
        $temp = array_values(array_diff_assoc($ids, $sour));
        foreach ($temp as $m => $n) {
            if ($n == $sour_id) {
                $offset = $desc_id;
            } else {
                if ($sour_id == $temp[0]) {
                    $offset = isset($temp[$m + 1]) ? $temp[$m + 1] : $sour_id;
                } else {
                    $offset = isset($temp[$m - 1]) ? $temp[$m - 1] : $sour_id;
                }
            }
            $weighids[$n] = $weighdata[$offset];
            Db::name($table)->where($prikey, $n)->update([$field => $weighdata[$offset]]);
        }
        $this->success();
    }

    /**
     * 清空系统缓存
     */
    public function wipecache()
    {
        $type = $this->request->request("type");
        switch ($type) {
            case 'all':
                rmdirs(ROOT_PATH.'public/template');
                rmdirs(ROOT_PATH.'runtime');
                Cache::clear();
          break;
        }

        \think\Hook::listen("wipecache_after");
        $this->success();
    }

    /**
     * 读取分类数据,联动列表
     */
    public function category()
    {
        $type = $this->request->get('type');
        $pid = $this->request->get('pid');
        $where = ['status' => 'normal'];
        $categorylist = null;
        if ($pid !== '') {
            if ($type) {
                $where['type'] = $type;
            }
            if ($pid) {
                $where['pid'] = $pid;
            }

            $categorylist = Db::name('category')->where($where)->field('id as value,name')->order('weigh desc,id desc')->select();
        }
        $this->success('', null, $categorylist);
    }

    /**
     * 读取省市区数据,联动列表
     */
    public function area()
    {
        $params = $this->request->get("row/a");
        if (!empty($params)) {
            $province = isset($params['province']) ? $params['province'] : '';
            $city = isset($params['city']) ? $params['city'] : null;
        } else {
            $province = $this->request->get('province');
            $city = $this->request->get('city');
        }
        $where = ['pid' => 0, 'level' => 1];
        $provincelist = null;
        if ($province !== '') {
            if ($province) {
                $where['pid'] = $province;
                $where['level'] = 2;
            }
            if ($city !== '') {
                if ($city) {
                    $where['pid'] = $city;
                    $where['level'] = 3;
                }
                $provincelist = Db::name('area')->where($where)->field('id as value,name')->select();
            }
        }
        $this->success('', null, $provincelist);
    }



   


    

}
