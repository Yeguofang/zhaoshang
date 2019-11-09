<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\Project\zhaoshang\public/../application/index\view\mobile\help.html";i:1573271817;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $tdk[4]->title; ?></title>
	<meta content="<?php echo $tdk[4]->description; ?>" name="description" />
	<meta content="<?php echo $tdk[4]->keyword; ?>" name="keywords" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

</head>

<body>
	<div class="main">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="x_bottom" style="margin-bottom:8px">
			<tr>
				<td width="33%" height="60"> <a href="/"><img src="<?php echo $web['web_logo']; ?>" border="0"
							onload='javascript:if(this.width>220) this.width=220;'></a></td>
				<td width="67%" align="right" valign="bottom">
					<table width="87%" height="50" border="0" cellpadding="3" cellspacing="0">
						<tr>
							<td width="89%" align="right" valign="top">
								客服电话:<?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?>
							</td>
						</tr>
						<tr>
							<td align="right" valign="bottom" style="color:cccccc"><a href="/">首页</a>&nbsp;|&nbsp;<a
									href="<?php echo url('/help'); ?>">帮助</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<div class="bordercccccc" style="margin-bottom:10px">
			<div class="titlebig">帮助中心
				<a name="ding" id="ding"></a>
			</div>
			<div style="zoom: 1; overflow:auto;padding:10px">
				<ul>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<LI style="float:left;width:500px">【帮助】
						<A href="<?php echo url('/help'); ?>#<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></A>
					</LI>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>

		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
		<div class="titles"><span><a href="#ding">↑返回到顶部</a></span>
			<a name="<?php echo $h['id']; ?>"></a>
			<h3><?php echo $h['title']; ?></h3>
		</div>
		<div class="content1">
			<p>
				<?php echo $h['content']; ?>
			</p>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>

	</div>

	<div style="height:10px;clear:both;"></div>
<div class="bottom">
    <div style="color:#999999">
            <a href="/">公司简介</a>|<a href="/siteinfo-2.htm">联系方式</a>|<a href="<?php echo url('/help'); ?>">帮助信息</a>|<a href="<?php echo url('/link'); ?>">友情链接</a>|<a href="/sitemap.htm">网站地图</a></div>
  <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $web['web_icp']; ?></a> &nbsp;
   <br />
   <?php echo $web['web_beian']; ?>   <br />
   <?php echo $web['web_copyright']; ?>
   </div>
</body>

</html>