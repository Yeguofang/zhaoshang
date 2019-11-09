<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\Project\zhaoshang\public/../application/index\view\mobile\link.html";i:1573271559;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573272187;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-09 11:47:08
 * @LastEditTime: 2019-11-09 11:52:38
 -->
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<title>友情链接</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

</head>

<body>
		
<script language="JavaScript" src="/static/mobile/js/divselect.js"></script>
	<script type="text/javascript">
		$(function () {
			$.divselect("#divselect", "#inputselect");
		});
	</script>
	<div class="top1">
		<img src='/static/mobile/picture/user.gif' style="margin-top:5px"> 您好！客人 [<a
			href=http://3158.zzcms.net/user/login.htm target='_blank'>请登录</a>]&nbsp;[<a
			href=http://3158.zzcms.net/reg/userreg.htm target='_blank'>免费注册</a>]&nbsp;
			<a href="<?php echo url('/help'); ?>">帮助</a>
	</div>
	<div class="top2">
		<span>
			<form action="<?php echo url('/search'); ?>"" method="post">
				<div id="divselect">
					<cite>招商</cite>
					<ul>
						<li><a href="javascript:;" selectid="project">招商</a></li>
						<li><a href="javascript:;" selectid="article">资讯</a></li>
					</ul>
				</div>
				<input name="type" type="hidden" value="project" id="inputselect" />
				<input name="keyword" type="text" class="biaodan_search" x-webkit-speech />
				<input type="submit" class="buttons_search" value="搜索" />
			</form>
		</span>

		<div class="bigbigword3"><a href="/index.php"><img src="<?php echo $web['web_logo']; ?>" height="33"
					width="115"></a></div>
	</div>

	<div class="nav">
		<ul>
                <?php if(is_array($project_cate) || $project_cate instanceof \think\Collection || $project_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $project_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo url('/project'); ?>/<?php echo $c['id']; ?>">
                        <img src="<?php echo $c['image']; ?>">
                        <h2><?php echo $c['name']; ?></h2>
                    </a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<li><a href="<?php echo url('/article'); ?>">   <img src=""><h2>资讯</h2></a></li>
				<li><a href="<?php echo url('/ranking'); ?>">   <img src=""><h2>排行</h2></a></li>
				<li><a href="<?php echo url('/help'); ?>">   <img src=""><h2>帮助</h2></a></li>
		</ul>
	</div>
	<div class="main">
		<div class="pagebody">
			<div class="left">

				<div class="titles">
					<h3>图片广告</h3>
				</div>
				<div class="adStyle2">
					<ul>
						<?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo $a['url']; ?>" target="_blank">
								<img data-original="<?php echo $a['image']; ?>" alt="<?php echo $a['title']; ?>" src="<?php echo $a['image']; ?>"
									style="width:125px;height:94px;" style="display: inline;">
							</a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php echo $image->render(); ?>
				<!-- 图文广告 -->

				<!-- 文字链接 -->
				<div class="titles">
					<h3>文字链接</h3>
				</div>
				<div class="txtbox">
					<ul>
						<?php if(is_array($text) || $text instanceof \think\Collection || $text instanceof \think\Paginator): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>
						<li class="txt">
							　<a href="<?php echo $e['url']; ?>" target='_blank'><?php echo $e['title']; ?></a>　|　
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php echo $text->render(); ?>
				<!-- 文字链接 -->

			</div>
		</div>
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