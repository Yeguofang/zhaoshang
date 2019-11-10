<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\Project\zhaoshang\public/../application/index/view/mobile/project_list.html";i:1573359351;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573351931;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-08 17:25:10
 * @LastEditTime: 2019-11-10 12:15:51
 -->
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $tdk[3]->title; ?></title>
    <meta content="<?php echo $tdk[3]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[3]->keyword; ?>" name="keywords" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

	<script type="text/javascript">
		var CRT = 10; // 如果大于等于3
		jQuery(function ($) {
			$("div.boxbigclass li").filter("li:gt(" + (CRT - 1) + ")").hide().filter(":last").show().click(function () {
				$(this).siblings("li:gt(" + (CRT - 1) + ")").toggle();
				var more = document.getElementById("more_class");
				if (more.innerHTML == "显示更多...") {
					more.innerHTML = "收起";
				} else {
					more.innerHTML = "显示更多...";
				}
			});
		});
	</script>
</head>


<body>

	<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-10 10:08:05
 * @LastEditTime: 2019-11-10 10:11:37
 -->

<script language="JavaScript" src="/static/mobile/js/divselect.js"></script>
	<script type="text/javascript">
		$(function () {
			$.divselect("#divselect", "#inputselect");
		});
	</script>
	<div class="top1">
	 您好！欢迎来到 <?php echo $web['web_name']; ?>站！电话：<?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?>
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

	<div class="station2">
		<li class='start'><a href='http://3158.zzcms.net'>首页</a></li>
		<li><a href='/zs/index.htm'><?php echo $name1['name']; ?></a></li>
		<li><a ><?php echo $name2['name']; ?></a></li>
	</div>
	<div class="left_content">

		<div class="boxbigclass">
			<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
			<li><a href="<?php echo url('/project'); ?>/<?php echo $c['pid']; ?>/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<li id="more_class" style="color: red;">显示更多...</li>
		</div>
	</div>



	<div class="left_content">

		<div id="more">
			 <?php if(is_array($projects) || $projects instanceof \think\Collection || $projects instanceof \think\Paginator): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
			<div class="loop">
				<table width='100%' border='0' cellspacing='0' cellpadding='0'>
					<tr>
						<td width='120' align="center">
							<table width='100' height='100' border='0' cellpadding='0' cellspacing='1'
								class='bordercccccc'>
								<tr>
									<td align='center'>
										<div class="img">
											<img src="<?php echo $p['image']; ?>"/>
										</div>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<div class="title">
								<a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" class="bigbigword"><?php echo $p['name']; ?></a>
							</div>
							<div class="prouse">
								投资额度：<?php if(($p['price'] == 1 )): ?>
									1-3万
									<?php elseif(($p['price'] == 2)): ?>
									3-5万
									<?php elseif(($p['price'] == 3)): ?>
									5-10万
									<?php elseif(($p['price'] == 4)): ?>
									10万以上
								<?php endif; ?></div>
							<div class="companyname">产品特点：<?php echo $p['prouse']; ?></div>
							<div>招商区域：<span class="city"><?php echo $p['city']; ?></span></div>
							<div>代理留言：<span class="dl_num"><?php echo $p['msg']; ?> /条</span></div>
						</td>
					</tr>
				</table>
				<hr>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<?php echo $project->render(); ?>
		</div>

	</div>
	
	<div class="titles"><span>&nbsp;</span>
		<h3>热门项目</h3>
	</div>
	<div class="content1">
		<ul>
			<?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
			<li><span style="width:80px" title="阅832次">(<?php echo $h['views']; ?>)</span>
				<font <?php if(($key==0 || $key==1 || $key==2)): ?>class="xuhao1" <?php else: ?> class="xuhao2"
					<?php endif; ?>><?php echo $key+1; ?> </font> <a href="/zx/show-38.htm">
					<?php echo mb_substr($h['name'],0,10); ?></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div class="titles"><span>&nbsp;</span>
		<h3>推荐项目</h3>
	</div>
	<div class="content1">
		<ul>
			<?php if(is_array($recommend) || $recommend instanceof \think\Collection || $recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
			<li><span style="width:80px" title="阅832次">(<?php echo $h['views']; ?>)</span>
				<font <?php if(($key==0 || $key==1 || $key==2)): ?>class="xuhao1" <?php else: ?> class="xuhao2"
					<?php endif; ?>><?php echo $key+1; ?> </font> <a href="/zx/show-38.htm">
					<?php echo mb_substr($h['name'],0,10); ?></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
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