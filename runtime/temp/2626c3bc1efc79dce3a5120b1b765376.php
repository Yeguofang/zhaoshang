<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\Project\zhaoshang\public/../application/index\view\mobile\article.html";i:1573269337;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573280734;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-09 11:09:00
 * @LastEditTime: 2019-11-09 11:15:37
 -->
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo $tdk[1]->title; ?></title>
<meta content="<?php echo $tdk[1]->description; ?>" name="description" />
<meta content="<?php echo $tdk[1]->keyword; ?>" name="keywords" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

<link href="/static/mobile/css/jdimg.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/static/mobile/js/jdimg.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
		$.focus("#focus002");
	});
</script>
<style type="text/css">
.focus {width:320px; height:240px;}
.focus img{border:0;width:320px; height:240px;}
.focus ul li {width:320px; height:240px;  }
.focus .btnBg {background-color:#000000; display:block;}
.focus .btnBg {width:320px;}
.focus .btn {width:320px;}
</style>
</head>
<body>
<script type="text/javascript">
$(function(){
	$.divselect("#divselect","#inputselect");
});
</script>


<script language="JavaScript" src="/static/mobile/js/divselect.js"></script>
	<script type="text/javascript">
		$(function () {
			$.divselect("#divselect", "#inputselect");
		});
	</script>
	<div class="top1">
		<img src='/static/mobile/picture/user.gif' style="margin-top:5px"> 您好！

			<?php if($user['nickname']): ?> 您好！
			<b><?php echo $user['nickname']; ?></b>&nbsp;[ <a target="_bank" href="<?php echo url('menber/user/index'); ?>">进入用户中心</a>&nbsp;|&nbsp;<a href="<?php echo url('menber/user/logout'); ?>">安全退出</a> ]&nbsp;
			<?php else: ?> 
			欢迎来到 <?php echo $web['web_name']; ?>站！
			<a href="<?php echo url('menber/user/login'); ?>" target='_blank'>[登录]</a> <a href="<?php echo url('menber/user/register'); ?>" target='_blank'>[免费注册]</a> 
			<?php endif; ?>
			<br/>电话：<?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?>
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


<div class="box" style="text-align:center">
<div class="focus" id="focus001">
	<ul>
		<?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
		<li>
			<a href="<?php echo url('/article_detail'); ?>/<?php echo $s['category_id']; ?>/<?php echo $s['id']; ?>" target="_blank"><img src="<?php echo $s['image']; ?>" /></a>
			<div class="divtitlebg"></div>
			<div class="divtitle"><?php echo $s['title']; ?></div>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
</div>
<div class="bordercccccc">
	<table width="100%" border="0" cellspacing="10" cellpadding="0">
			<?php if(is_array($home) || $home instanceof \think\Collection || $home instanceof \think\Paginator): $i = 0; $__LIST__ = $home;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
		<tr>
			<td style='width:33%;' valign="top">
				<div class='titles'><span><a href="<?php echo url('/article'); ?>/<?php echo $h['id']; ?>"> 更多...</a></span><?php echo $h['name']; ?></div>
				<div class='content2' >
				<ul>
					<?php if(is_array($h['content']) || $h['content'] instanceof \think\Collection || $h['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $h['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
					<LI>
						<font <?php if(($key == 0 ||$key ==1 ||$key ==2)): ?> class=xuhao1 <?php else: ?>class=xuhao2<?php endif; ?>><?php echo $key+1; ?></font>
						<A href="<?php echo url('/article_detail'); ?>/<?php echo $c['category_id']; ?>/<?php echo $c['id']; ?>"><?php echo $c['title']; ?></A>
					</LI>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				</div>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
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