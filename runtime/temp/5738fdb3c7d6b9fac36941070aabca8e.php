<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"D:\Project\zhaoshang\public/../application/index\view\mobile\index.html";i:1573206968;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573642868;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $tdk[0]->title; ?></title>
    <meta content="<?php echo $tdk[0]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[0]->keyword; ?>" name="keywords" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

</head>
<style>
		.content_index>.tabel>ul{
			display: flex;
			flex-wrap: wrap;
		}
		.content_index>.tabel>ul>li>a>img{
			border:1px solid #bebdbd;
			margin-left: 10px;
			margin-top: 5px;
			width: 50%;
		}
		.content_index>.tabel>ul>li>p{
			height: 20px;
			padding-top: 2px;
			font-size: 14px;
			text-align:center;
		}
		
		</style>
<body>
	<!-- <script language="JavaScript" src="/static/mobile/js/qt.js"></script> -->
	
		<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-10 10:08:05
 * @LastEditTime: 2019-11-13 19:01:08
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
				<li><a href="<?php echo url('/article'); ?>">   <img src="/static/home/images/zx.png"><h2>创业资讯</h2></a></li>
				<li><a href="<?php echo url('/ranking'); ?>">   <img src="/static/home/images/ph.png"><h2>排行</h2></a></li>
		</ul>
	</div>

	<div style="margin-bottom:10px">
		<div id="demo01" class="flexslider">
			<ul class="slides">
				<?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
				<li>
					<div>
						<a href="<?php echo $s['url']; ?>">
							<img src="<?php echo $s['image']; ?>" alt="<?php echo $s['title']; ?>" />
						</a>
					</div>
					<div><?php echo $s['title']; ?></div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<script type="text/javascript">
			$(function () {

				$('#demo01').flexslider({
					animation: "slide",
					//direction:"horizontal",
					direction: "vertical",
					easing: "swing"
				});

				$('#demo02').flexslider({
					animation: "slide",
					direction: "vertical",
					easing: "swing"
				});

			});
		</script>
	</div>
	<div>

		<?php foreach($index as $key=>$v): ?>
		<div class="boxrow<?php echo $key+1; ?>">
			<div class='titlebigs titlebig<?php echo $key+1; ?>'>
				<h3>
					<a href="<?php echo url('/project'); ?>/<?php echo $v['id']; ?>"><?php echo $v['name']; ?> </a>
				 </h3> 
					<span>
						<?php foreach($v['nav'] as $n): ?>
						<li><a href="<?php echo url('/project'); ?>/<?php echo $n['pid']; ?>/<?php echo $n['id']; ?>"><?php echo $n['name']; ?></a>
						</li>
						<?php endforeach; ?>
					</span>
			</div>

			<div class="content_index">
			  <div class="tabel">
				<ul>
					<?php foreach($v['project'] as $p): ?>
					<li>
						<a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" target="_bank">
							<img class="lazy" src="<?php echo $p['image']; ?>" style="width: 120px;height:90px;"/>
						</a>
						<p><?php echo $p['name']; ?></p>
					</li>
					<?php endforeach; ?>
				</ul>
			  </div>
			</div>
		</div>

		<?php endforeach; ?>
	



	</div>

	  <!-- 图文广告－Ａ区 -->
	  <div class="titles">
            <span>
                <?php if(is_array($advert_a['text']) || $advert_a['text'] instanceof \think\Collection || $advert_a['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_a['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $a['url']; ?>" target="_blank" ><?php echo $a['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span>
            <h3>火爆招商a区</h3>
        </div>
        <div class="pagebody">
            <div class="adStyle1">
                <ul>
                    <?php if(is_array($advert_a['image']) || $advert_a['image'] instanceof \think\Collection || $advert_a['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_a['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a  href="<?php echo $a['url']; ?>" target="_blank" style="text-align: center;">
                            <img data-original="<?php echo $a['image']; ?>" alt="<?php echo $a['title']; ?>" src="<?php echo $a['image']; ?>" style="display: inline;">
                            <?php echo $a['title']; ?>
                        </a>
					</li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
		 <!-- 图文广告－Ａ区 -->
		 
	
          <!-- 图文广告－B区 -->
		  <div class="titles">
				<span>
					<?php if(is_array($advert_b['text']) || $advert_b['text'] instanceof \think\Collection || $advert_b['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_b['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
					<a href="<?php echo $b['url']; ?>" target="_blank" ><?php echo $b['title']; ?></a>|
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<a href="<?php echo url('/link'); ?>">更多...</a>
				</span>
				<h3>火爆招商B区</h3>
			</div>
			
			<div class="adStyle2">
				<ul>
					<?php if(is_array($advert_b['image']) || $advert_b['image'] instanceof \think\Collection || $advert_b['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_b['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
					<li>
						<a  href="<?php echo $b['url']; ?>" target="_blank" style="text-align: center;">
							<img data-original="<?php echo $b['image']; ?>" alt="<?php echo $b['title']; ?>" src="<?php echo $b['image']; ?>" style="display: inline;">
							<?php echo $b['title']; ?>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-- 图文广告－B区 -->
	
	
			 <!-- 图文广告－C区 -->
			<div class="titles">
				<span>
					<?php if(is_array($advert_c['image']) || $advert_c['image'] instanceof \think\Collection || $advert_c['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_c['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
					<a href="<?php echo $c['url']; ?>" target="_blank" ><?php echo $c['title']; ?></a>|
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<a href="<?php echo url('/link'); ?>">更多...</a>
				</span>
				<h3>火爆招商C区</h3>
			</div>
			<div class="adStyle3">
				<ul>
					<?php if(is_array($advert_c['image']) || $advert_c['image'] instanceof \think\Collection || $advert_c['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_c['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
					<li>
						<a href="<?php echo $c['url']; ?>" target="_blank" >
							<img data-original="<?php echo $c['image']; ?>" alt="<?php echo $c['title']; ?>" src="<?php echo $c['image']; ?>" style="display: block;">
						  
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			 <!-- 图文广告－C区 -->
			

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