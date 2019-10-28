<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"/var/www/zs/public/../application/index/view/menber/user/profile.html";i:1572258835;s:58:"/var/www/zs/application/index/view/menber/common/head.html";i:1571803846;}*/ ?>
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
                </div>

                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">
                        <span class="x-red">*</span>账号</label>
                    <div class="layui-input-inline">
                        <input type="text" id="title" value="<?php echo htmlentities($user['username']); ?>" readonly="readonly"
                            autocomplete="off" class="layui-input"></div>
                </div>


                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">
                        <span class="x-red">*</span>密码</label>
                    <div class="layui-input-inline">
                        <input type="text" id="title" name="password" placeholder="不改留空" class="layui-input"></div>
                </div>

                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">
                        <span class="x-red">*</span>公司名称</label>
                    <div class="layui-input-inline">
                        <input type="text" id="company_name" name="company_name"
                            value="<?php echo htmlentities($user['company_name']); ?>" autocomplete="off" class="layui-input"></div>
                </div>

                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">
                        <span class="x-red">*</span>邮箱</label>
                    <div class="layui-input-inline">
                        <input type="text" id="title" name="email" value="<?php echo htmlentities($user['email']); ?>" autocomplete="off"
                            class="layui-input"></div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">
                        <span class="x-red">*</span>手机号</label>
                    <div class="layui-input-inline">
                        <input type="text" id="title" name="mobile" value="<?php echo htmlentities($user['mobile']); ?>"
                            autocomplete="off" class="layui-input"></div>
                </div>
                <div class="layui-form-item">
                <label for="title" class="layui-form-label">
                        <span class="x-red">*</span>公司地址</label>
                    <div class="layui-input-inline">
                        <input type="text" id="title" name="address" value="<?php echo htmlentities($user['address']); ?>"
                            autocomplete="off" class="layui-input"></div>
                </div>

                <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">公司介绍</label>
                    <div class="layui-input-block">
                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="company_desc" type="text/plain"><?php echo $user['company_desc']; ?></script>
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


                // 实例化编辑器 
                var editor = UE.getEditor('container');

                //监听提交
                form.on('submit(add)', function (data) {
                    //文本编辑器内容
                    data.field.company_desc = editor.getContent();

                    $.ajax({
                        type: "post",
                        async: false,
                        url: "<?php echo url('menber/user/profile'); ?>",
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
</body>

</html>