<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"/var/www/zs/public/../application/index/view/menber/article/edit.html";i:1571821306;s:58:"/var/www/zs/application/index/view/menber/common/head.html";i:1571803846;}*/ ?>
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
                                
                                <select name="category_id" lay-verify="required" >
                                        <option value="">请选择分类</option>
                                        <?php foreach($cate_one as $key=>$one): ?>
                                        <optgroup label="<?php echo $one['name']; ?>">
                                        <?php if($one['two'] != null): foreach($one['two'] as $v): ?>
                                            <option value="<?php echo $v['id']; ?>" <?php if(in_array(($data['category_id']), is_array($v['id'])?$v['id']:explode(',',$v['id']))): ?> selected <?php endif; ?> ><?php echo $v['name']; ?></option>
                                            <?php endforeach; endif; ?>
                                        </optgroup>
                                        <?php endforeach; ?>
                                    </select>
                        </div>
	<div class="layui-form-item">
		<label for="title" class="layui-form-label">
			<span class="x-red">*</span>文章标题</label>
		<div class="layui-input-block">
            <input type="text" id="title" name="title"  　lay-verify="title" width="300px" value="<?php echo $data['title']; ?>"　autocomplete="off" class="layui-input"></div>
		</div>
                <div class="layui-form-item">
                    <label for="tdk_title" class="layui-form-label">
                            <span class="x-red">*</span>tdk-标题</label>
                    <div class="layui-input-block">
                        <input type="text" id="tdk_title" name="tdk_title"  autocomplete="off" value="<?php echo $data['tdk_title']; ?>" class="layui-input"></div>
                </div>
                <div class="layui-form-item">
                    <label for="tdk_key" class="layui-form-label">
                            <span class="x-red">*</span>tdk-关键词</label>
                    <div class="layui-input-block">
                        <input type="text" id="tdk_key" name="tdk_key"  autocomplete="off" value="<?php echo $data['tdk_key']; ?>" class="layui-input"></div>
		</div>
		<div class="layui-form-item">
			<label for="tdk_desc" class="layui-form-label">
				<span class="x-red">*</span>tdk-描述</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入内容"  name="tdk_desc" class="layui-textarea"><?php echo $data['tdk_desc']; ?></textarea>
		    </div>
		    </div>
      
    <div class="layui-form-item layui-form-text">
        <label for="desc" class="layui-form-label">内容</label>
        <div class="layui-input-block">
           <!-- 加载编辑器的容器 -->
	<script id="container" name="content" type="text/plain"  ><?php echo $data['content']; ?></script>
        </div>
    </div>
    <div class="layui-form-item">
        <label for="L_repass" class="layui-form-label"></label>
        <button class="layui-btn" lay-filter="edit" lay-submit="">提交</button></div>
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
                    title: function(value){
                        if(value.length == 0){
                            return '标题不能空！';
                        }
                    },
                    cate: function(value){
                        if(value.length == 0){
                            return '分类不能空！';
                        }
                    },
                });	
  

                // 实例化编辑器 
                var editor = UE.getEditor('container');
                
                //监听提交
                form.on('submit(edit)', function(data){
                    //文本编辑器内容
			data.field.content =  editor.getContent();
			if(data.field.content == ''){
				layer.msg('文章内容不能为空！', {icon: 2,time: 1300});
				return false;
			}
			console.log(data.field);
			$.ajax({
				type: "post",
				async: false,
				url: "<?php echo url('menber/article/edit'); ?>/<?php echo $data['id']; ?>",    
				//后台数据处理-下面有具体实现
				data:data.field,
				success: function (res) {
				console.log(res);
					if(res.code == 1){
						layer.msg(res.msg,{icon: 1,time: 1000});
						//关闭当前frame
						setTimeout(function (){
							xadmin.close();
                            xadmin.reload();
						},1000)
					}else{
						layer.msg(res.msg, {icon: 2,time: 1300});
					}
				}
			});
		return false;
		});

            });
        
        </script>
</body>
</html>