<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"/var/www/zs/public/../application/index/view/menber/project/add.html";i:1571822280;s:58:"/var/www/zs/application/index/view/menber/common/head.html";i:1571803846;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
<title>用户中心</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="/static/home/x-admin/css/font.css">
<link rel="stylesheet" href="/static/home/x-admin/css/xadmin.css">
<script src="/static/home/layui/layui.js" charset="utf-8"></script>
<link rel="stylesheet" href="/static/home/layui/css/layui.css"  media="all">
<script src="/static/home/x-admin/lib/layui/layui.js" charset="utf-8"></script>
<script src="/static/home/js/jquery.js" charset="utf-8"></script>
<script type="text/javascript" src="/static/home/x-admin/js/xadmin.js"></script>
<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!-- [if lt IE 9]> -->
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<!-- <![endif] -->
<script>
    // 是否开启刷新记忆tab功能
    var is_remember = false;
</script>
</head>

<body>
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form">


                <div class="layui-form-item">
                    <label for="tdk_key" class="layui-form-label">
                        <span class="x-red">*</span>所属分类</label>
                    <div class="layui-input-inline">
                        <select name="category_id" 　lay-verify="required">
                            <option value="">请选择分类</option>
                            <?php foreach($cate_one as $key=>$one): ?>
                            <optgroup label="<?php echo $one['name']; ?>">
                                <?php if($one['two'] != null): foreach($one['two'] as $v): ?>
                                <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
                                <?php endforeach; endif; ?>
                            </optgroup>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                        <label for="name" class="layui-form-label">
                            <span class="x-red">*</span>项目名称</label>
                        <div class="layui-input-inline">
                            <input type="text" id="name"" name="name" autocomplete="off" class="layui-input"></div>
                    </div>

        

                <div class="layui-form-item">
                        <label for="phone" class="layui-form-label">
                            <span class="x-red">*</span>加盟手机</label>
                        <div class="layui-input-inline">
                            <input type="text" id="phone"" name="phone" autocomplete="off" class="layui-input"></div>
                    </div>

                    <div class="layui-form-item">
                            <label for="moblie" class="layui-form-label">
                                <span class="x-red">*</span>加盟电话</label>
                            <div class="layui-input-inline">
                                <input type="text" id="moblie"" name="moblie" autocomplete="off" class="layui-input"></div>
                        </div>
                        
                        <div class="layui-form-item">
                                <label class="layui-form-label">投资金额</label>
                                <div class="layui-input-inline">
                                    <select name="price">
                                        <option value="">请选择</option>
                                        <option value="1">1-3万</option>
                                        <option value="2">3-5万</option>
                                        <option value="3">5-10万</option>
                                        <option value="3">10万以上</option>
                                    </select>
                                </div>
                            </div>
                        
                <div class="layui-form-item">
                    <label class="layui-form-label">缩略图</label>
                    <div class="layui-input-line">
                        <div class="layui-upload">
                            <button type="button" class="layui-btn" id="test1">上传图片</button>
                            <div class="layui-upload-list">
                                <img class="layui-upload-img" id="demo1">
                                <input type="hidden" name="image" id="image">
                                <p id="demoText"></p>
                            </div>
                        </div>
                    </div>
                </div>

              
                
                <div class="layui-form-item">
                    <label for="prouse" class="layui-form-label">
                        <span class="x-red">*</span>项目特点</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" name="prouse" class="layui-textarea"></textarea>
                    </div>
                </div>

                <div class="layui-form-item">
                        <label for="title" class="layui-form-label">
                            <span class="x-red">*</span>tdk-标题</label>
                        <div class="layui-input-block">
                            <input type="text" id="title" name="title" 　lay-verify="title" width="300px" 　autocomplete="off"
                                class="layui-input"></div>
                    </div>

                <div class="layui-form-item">
                    <label for="keywords" class="layui-form-label">
                        <span class="x-red">*</span>tdk-关键词</label>
                    <div class="layui-input-block">
                        <input type="text" id="keywords" name="keywords" autocomplete="off" class="layui-input"></div>
                </div>

                <div class="layui-form-item">
                    <label for="description" class="layui-form-label">
                        <span class="x-red">*</span>tdk-描述</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" name="description" class="layui-textarea"></textarea>
                    </div>
                </div>

                <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">内容</label>
                    <div class="layui-input-block">
                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="content" type="text/plain"></script>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label"></label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">提交</button></div>
            </form>
        </div>
    </div>

    <!-- 配置文件 -->
    <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>

    <script>
        layui.use(['form', 'layer', 'upload'],
            function () {
                $ = layui.jquery;
                var form = layui.form,
                    layer = layui.layer,
                    upload = layui.upload;


                //自定义验证规则
                form.verify({
                    title: function (value) {
                        if (value.length == 0) {
                            return '标题不能空！';
                        }
                    },
                    cate: function (value) {
                        if (value.length == 0) {
                            return '分类不能空！';
                        }
                    },
                });

                //普通图片上传
                var uploadInst = upload.render({
                    elem: '#test1'
                    , url: "<?php echo url('ajax/upload'); ?>"
                    , before: function (obj) {
                        //预读本地文件示例，不支持ie8
                        obj.preview(function (index, file, result) {
                            $('#demo1').attr('src', result); //图片链接（base64）
                        });
                    }
                    , done: function (res) {
                        //上传成功
                        if (res.code ==1) {
                            $('#image').val(res.data.url);
                            layer.msg(res.msg, { icon: 1, time: 1000 });
                        }
                        //上传成功
                    }
                    , error: function () {
                        //演示失败状态，并实现重传
                        var demoText = $('#demoText');
                        demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                        demoText.find('.demo-reload').on('click', function () {
                            uploadInst.upload();
                        });
                    }
                });



                // 实例化编辑器 
                var editor = UE.getEditor('container');

                //监听提交
                form.on('submit(add)', function (data) {
                    //文本编辑器内容
                    data.field.content = editor.getContent();
                    if (data.field.content == '') {
                        layer.msg('文章内容不能为空！', { icon: 2, time: 1300 });
                        return false;
                    }
                    console.log(data.field);
                    $.ajax({
                        type: "post",
                        async: false,
                        url: "<?php echo url('menber/project/add'); ?>",
                        //后台数据处理-下面有具体实现
                        data: data.field,
                        success: function (res) {
                            console.log(res);
                            if (res.code == 1) {
                                layer.msg(res.msg, { icon: 1, time: 1000 });
                                //关闭当前frame
                                setTimeout(function () {
                                    xadmin.close();
                                }, 1000)
                            } else {
                                layer.msg(res.msg, { icon: 2, time: 1300 });
                            }
                        }
                    });
                    return false;
                });

            });

           

    </script>

    <script>
    $(function(){
   
        $('input:radio[name="pid"]').click(function(){
            var checkValue = $('input:radio[name="pid"]:checked').val(); 
            alert(checkValue);
        });
});
    </script>
</body>

</html>