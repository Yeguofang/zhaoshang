<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\Project\zhaoshang\public/../application/index\view\mobile\article_detail.html";i:1573281079;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573280734;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-09 11:22:13
 * @LastEditTime: 2019-11-09 14:31:15
 -->
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $data['title']; ?></title>
	<meta name="keywords" content="<?php echo $data['tdk_key']; ?>" />
	<meta name="description" content="<?php echo $data['tdk_desc']; ?>" />
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
	<div class="station">
		<h3>
			<li class='start'><a href="/">首页</a></li>
			<li><a href="<?php echo url('/article'); ?>">资讯</a></li>
			<li><?php echo $data['name']; ?></li>
		</h3>
	</div>
	<div class="box">
		<div id="BoxInfoTitle">深受创业者喜爱的创业小项目</div>
		<div id="BoxInfoTitleNext">
			<!-- 来源：&nbsp;&nbsp;发布日期：2018-10-29&nbsp;&nbsp;发布者：&nbsp;&nbsp;共阅249次 -->
			来源：<?php echo $web['web_name']; ?>&nbsp;&nbsp;<br />日期：2018-10-29&nbsp;&nbsp;发布者：<?php echo $data['company_name']; ?>&nbsp;&nbsp;<br /> 共阅254次 字体：<a
				href='javascript:fontZoom(22)'>大</a> <a href='javascript:fontZoom(14)'>中</a> <a
				href='javascript:fontZoom(12)'>小</a>

		</div>
		<div id="fontzoom"><?php echo $data['content']; ?> </div>
		<div style="text-align:center;padding:10px;">
			<a href="javascript:printcontent()" target="_self"><img src="static/picture/ico-dy.gif" width="18"
					height="17" border="0" />
				打印本文</a>&nbsp;&nbsp;<a href='#top'><img src="static/picture/ico-top.gif" width="16" height="16"
					border="0" />&nbsp;返回顶部</a>&nbsp;&nbsp;
			<a href="javascript:window.close()"><img src="static/picture/close.gif" width="16" height="16" border="0" />
				关闭该页</a>
		</div>
	</div>

	<div class="box">
		<?php if(($prv == null)): ?>
		上一篇文章：没有了<br />
		<?php else: ?>
		上一篇文章：<a href="<?php echo url('/article_detail'); ?>/<?php echo $prv['category_id']; ?>/<?php echo $prv['id']; ?>"><?php echo $prv['title']; ?></a><br />
		<?php endif; if(($next == null)): ?>
		下一篇文章：没有了
		<?php else: ?>
		下一篇文章：<a href="<?php echo url('/article_detail'); ?>/<?php echo $next['category_id']; ?>/<?php echo $next['id']; ?>"><?php echo $next['title']; ?></a>
		<?php endif; ?>
	</div>

	<div class="titles">
		<h3>网友评论</h3>
	</div>
	<div class="content1">
		<?php if(($data['comment'] == null)): ?>
		&nbsp;暂无评论
		<?php else: if(is_array($data['comment']) || $data['comment'] instanceof \think\Collection || $data['comment'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['comment'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
		匿名网友：<?php echo $c['content']; ?><br />
		<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</div>

	<div class="box">
			<form name="form2" id="form2">
					<div contenteditable="true" id="divtextarea" onblur="AddContentFromDiv('content','divtextarea')"></div>
					<?php echo token(); ?>
					<input name="content" type="hidden"" id="content"  size="22" maxlength="150">
					<input name="id" type="hidden"" value="<?php echo $data['id']; ?>">
					<input type="hidden" name="aid"  value="<?php echo $data['category_id']; ?>"/>
					<input type="hidden" name="company_id"  value="<?php echo $data['company_id']; ?>"/>
					<input type="hidden" name="url"  value="<?php echo url('/article_detail'); ?>/<?php echo $data['category_id']; ?>/"/>

					<input name="phone"" type="text" id="phone"  placeholder="请输入手机号" />
					<input style="margin-left: 20px;" type="button"  onclick="checkform()" value="发表评论" />
			</form>
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


	<script>
            //控制字体大小
            function fontZoom(size) {
                document.getElementById('fontzoom').style.fontSize = size + 'px';
                document.getElementById('fontzoom').style.lineHeight = size * 2 + 'px';
            }
    
            function printcontent() {
                document.body.innerHTML = document.getElementById('BoxInfoTitle').innerHTML + '<br/>' + document.getElementById('fontzoom').innerHTML;
                window.print();
			}
			function AddContentFromDiv(obj1,obj2){
			document.getElementById(obj1).value=document.getElementById(obj2).innerHTML;
			}
    
            function checkform() {
                var id = document.form2.id.value;
                var content = document.form2.content.value;
                var phone = document.form2.phone.value;
                var aid = document.form2.aid.value;
                var company_id = document.form2.company_id.value;
                var url = document.form2.url.value;
                var token = document.form2.__token__.value;

                if (content== "") {
                    alert("内容不能为空！");
                    return false;
                }

                var txt = /^[1][3,4,5,6,7,8][0-9]{9}$/;
	            if (phone=="" || !txt.test(phone)){
                    alert("请输入正确的手机号");
                    return false;
                }

                $.ajax({
                    type: "post",
                    async: false,
                    url: url+id,
                    //后台数据处理-下面有具体实现
                    data: {
                        company_id:company_id,
                        phone:phone,
                        content:content,
                        aid:aid,
                        token:token,
                        id:id,
                    },
                    success: function (res) {
                        if(res.code == 1){
                            alert(res.msg);
                            window.location.reload();
                        }else{
                            alert(res.msg);
                            window.location.reload();
                        }
                    }   
                });

            }
    
        </script>
</body>
</html>