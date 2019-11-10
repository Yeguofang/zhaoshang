<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\Project\zhaoshang\public/template/mobile/project/list/1/favicon.ico/1.html";i:1573379995;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-08 17:25:10
 * @LastEditTime: 2019-11-10 12:15:51
 -->
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>创业项目列表_991创业商机网</title>
    <meta content="" name="description" />
    <meta content="创业项目列表" name="keywords" />
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
	 您好！欢迎来到 9118创业商机网站！电话：178-1918-0343			<a href="/help">帮助</a>
	</div>
	<div class="top2">
		<span>
			<form action="/search"" method="post">
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

		<div class="bigbigword3"><a href="/index.php"><img src="/uploads/20191108/1746fb01c02daa8d2d414b0997a29948.png" height="33"
					width="115"></a></div>
	</div>

	<div class="nav">
		<ul>
                                <li>
                    <a href="/project/1">
                        <img src="">
                        <h2>特色餐饮</h2>
                    </a>
				</li>
				                <li>
                    <a href="/project/34">
                        <img src="">
                        <h2>母婴</h2>
                    </a>
				</li>
				                <li>
                    <a href="/project/33">
                        <img src="">
                        <h2>零售</h2>
                    </a>
				</li>
				                <li>
                    <a href="/project/32">
                        <img src="">
                        <h2>服装饰品</h2>
                    </a>
				</li>
				                <li>
                    <a href="/project/31">
                        <img src="">
                        <h2>教育培训</h2>
                    </a>
				</li>
				                <li>
                    <a href="/project/10">
                        <img src="">
                        <h2>生活服务</h2>
                    </a>
				</li>
				                <li>
                    <a href="/project/2">
                        <img src="">
                        <h2>特色餐饮</h2>
                    </a>
				</li>
								<li><a href="/article">   <img src=""><h2>资讯</h2></a></li>
				<li><a href="/ranking">   <img src=""><h2>排行</h2></a></li>
				<li><a href="/help">   <img src=""><h2>帮助</h2></a></li>
		</ul>
	</div>

	<div class="station2">
		<li class='start'><a href='http://3158.zzcms.net'>首页</a></li>
		<li><a href='/zs/index.htm'>特色餐饮</a></li>
		<li><a ></a></li>
	</div>
	<div class="left_content">

		<div class="boxbigclass">
						<li><a href="/project/1/15">中餐</a></li>
						<li><a href="/project/1/16">麻辣烫串串</a></li>
						<li><a href="/project/1/18">鸡排</a></li>
						<li><a href="/project/1/35">汉堡</a></li>
						<li><a href="/project/1/36">甜品</a></li>
						<li><a href="/project/1/37">冰淇淋</a></li>
						<li><a href="/project/1/38">奶茶饮品</a></li>
						<li><a href="/project/1/39">火锅</a></li>
						<li><a href="/project/1/40">小吃</a></li>
						<li><a href="/project/1/41">卤味</a></li>
						<li><a href="/project/1/42">快餐</a></li>
						<li id="more_class" style="color: red;">显示更多...</li>
		</div>
	</div>



	<div class="left_content">

		<div id="more">
			 					</div>

	</div>
	
	<div class="titles"><span>&nbsp;</span>
		<h3>热门项目</h3>
	</div>
	<div class="content1">
		<ul>
					</ul>
	</div>

	<div class="titles"><span>&nbsp;</span>
		<h3>推荐项目</h3>
	</div>
	<div class="content1">
		<ul>
					</ul>
	</div>
	
	<div style="height:10px;clear:both;"></div>
<div class="bottom">
    <div style="color:#999999">
            <a href="/">公司简介</a>|<a href="/siteinfo-2.htm">联系方式</a>|<a href="/help">帮助信息</a>|<a href="/link">友情链接</a>|<a href="/sitemap.htm">网站地图</a></div>
  <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备123456789-0号</a> &nbsp;
   <br />
   粤公安网备123456789-0号   <br />
   9118创业商机网   </div>
</body> 
</html>