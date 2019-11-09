<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\Project\zhaoshang\public/../application/index\view\mobile\project_search.html";i:1573272296;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573272187;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $tdk[7]->title; ?></title>
    <meta content="<?php echo $tdk[7]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[7]->keyword; ?>" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

    <script type="text/javascript">
        var CRT = 8; // 如果大于等于3
        jQuery(function($) {
            $("div.boxbigclass li").filter("li:gt(" + (CRT - 1) + ")").hide().filter(":last").show().click(function() {
                $(this).siblings("li:gt(" + (CRT - 1) + ")").toggle();
                var more = document.getElementById("more");
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
    <script language="JavaScript" src="/static/home/js/qt.js"></script>

    
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
                <div class="station2">
                    <li class='start'><a href='/'>首页</a></li>
                    <li><a href='/zs/index.htm'>招商</a></li>
                    <li><a href='/zs/fuzhuangxiebao'>服装鞋包</a></li>
                </div>

                <div class="left_content">
                        <div class="content4">

                            <?php if(is_array($projects) || $projects instanceof \think\Collection || $projects instanceof \think\Paginator): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                            <div id='Layer<?php echo $key; ?>' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> </td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer<?php echo $key; ?>);window.document.getElementById('Layer<?php echo $key; ?>').innerHTML='<img src=<?php echo $p['image']; ?> width=260>'" onMouseOut='showfilter(Layer<?php echo $key; ?>)'>
                                                    <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>"><img data-original="<?php echo $p['image']; ?>" onload="resizeimg(130,130,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" class="bigbigword bold"><?php echo $p['name']; ?></a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：<?php echo $p['city']; ?>
                                                    <br> 产品特点：<?php echo $p['prouse']; ?>
                                                    <br> 投资额度：<?php if(($p['price'] == 1 )): ?>
                                                                    1-3万
                                                                    <?php elseif(($p['price'] == 2)): ?>
                                                                    3-5万
                                                                    <?php elseif(($p['price'] == 3)): ?>
                                                                    5-10万
                                                                    <?php elseif(($p['price'] == 4)): ?>
                                                                    10万以上
                                                                <?php endif; ?>
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-2.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" target='_blank'></a>
                                                            </div>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                          

                        </div>
                    </form>
                    <div style='clear:both'></div>
                  
                    <!-- <div class='fenyei'> -->
                                <?php echo $project->render(); ?>
                    <!-- </div> -->


                </div>

            </div>
        </div>
    </div>

    <script type=text/javascript>
        $(function() {  
            $("img").lazyload({
                effect: "fadeIn", // 载入使用何种效果//effect(特效),值有show(直接显示),fadeIn(淡入),slideDown(下拉)等,常用fadeIn
                threshold: 200 // 提前开始加载//threshold,值为数字,代表页面高度.如设置为200,表示滚动条在离目标位置还有200的高度时就开始加载图片,可以做到不让用户察觉   
            });
            $("#redirect").click(function(){
              var page = $("#pages").val();
              console.log(page)
              window.location.href = "<?php echo url('/project'); ?>/<?php echo $c['pid']; ?>/<?php echo $c['id']; ?>?page="+page;
            });

        });

    </script>

    
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