<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/var/www/zs/public/../application/index/view/menber/article/comment.html";i:1571819750;s:58:"/var/www/zs/application/index/view/menber/common/head.html";i:1571803846;}*/ ?>
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
	<div class="x-nav">
		<span class="layui-breadcrumb">
			<a href="">首页</a>
			<a href="">演示</a>
			<a>
				<cite>导航元素</cite></a>
		</span>
		<a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
			onclick="location.reload()"  id="refrsesh"title="刷新">
			<i class="layui-icon layui-icon-refresh" style="line-height:30px"></i>
		</a>
	</div>
	<div class="layui-fluid">
		<div class="layui-row layui-col-space15">
			<div class="layui-col-md12">
				<div class="layui-card">

					<table class="layui-hide" id="article" lay-filter="article"></table>

				</div>
			</div>
		</div>
	</div>
</body>

<script type="text/html" id="toolbarDemo">
  <div class="layui-btn-container">
  <button class="layui-btn layui-btn-danger" lay-event="getCheckData">批量删除</button>
  </div>
</script>

<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"  href="javascript:;">删除</a>
</script>


<script>

	layui.config({
		base: '/static/home/layui/lay/modules/'      //自定义layui组件的目录
	});

	layui.use(['table', 'common'], function () {
		var table = layui.table,
			tools = layui.common;

		table.render({
			elem: '#article'
			, url: "<?php echo url('menber/article/comment'); ?>"
			, toolbar: '#toolbarDemo' //开启头部工具栏，并为其绑定左侧模板
			, title: '用户数据表'
			, cols: [[
				{ type: 'checkbox', fixed: 'left' }
				, { field: 'id', title: 'ID', width: 80, fixed: 'left', unresize: true, sort: true }
				, { field: 'title', title: '项目名称', }
				, { field: 'content', title: '电话' }
				, { field: 'create_time', title: '创建时间', }
				, { fixed: 'right', title: '操作', toolbar: '#barDemo', width: 150 }
			]]
			, page: true
		});


		table.on('toolbar(article)', function (obj) {
			tools.delAll_ajax('post', "<?php echo url('/menber/article/del'); ?>", table,obj);
		});

		//监听行工具事件
		table.on('tool(article)', function (obj) {
			var ids = obj.data.id;
			if (obj.event === 'del') {
				tools.del_ajax('post', "<?php echo url('/menber/article/del'); ?>", ids, obj);
			} else if (obj.event === 'edit') {
			
			}
		});
	});
</script>


</html>