<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\Project\zhaoshang\public/../application/index/view/mobile/project_detail.html";i:1573280286;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1573204135;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1573351931;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1573271844;}*/ ?>
<!DOCTYPE html>

<head>
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $data['title']; ?></title>
	<meta name="keywords" content="<?php echo $data['keywords']; ?>" />
	<meta name="description" content="<?php echo $data['description']; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link href="/static/mobile/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/mobile/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/slider.js" type="text/javascript" language="JavaScript"></script><!--焦点广告效果JS-->

	<style type="text/css">
		body {
			background: url({#bodybg}) {
				#bodybgrepeat
			}

			;
		}
	</style>
	<script language="JavaScript" type="text/JavaScript" src="/static/mobile/js/qt.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/home/js/msg.js"></script>
	<script>
		$(document).ready(function () {
			$("#tel").blur(function () { //jquery 中change()函数  
				$("#ts_tel").load(encodeURI("/ajax/dl_liuyan_check_ajax.php?action=checktel&id=" + $("#tel").val()));
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

	<div class="boxitem2" id="A">
		<ul>
			<li><a id="A1" href="###" onMouseOver="javascript:doClick(this,'A','current2')" class="current2">项目信息</a>
			</li>
			<li><a id="A2" href="###" onMouseOver="javascript:doClick(this,'A','current2')">项目详情</a></li>
			<li><a id="A3" href="###" onMouseOver="javascript:doClick(this,'A','current2')">公司信息</a></li>
		</ul>
	</div>


	<div style="display:block;" id="A_con1" class="content">
		<?php echo $data['poster']; ?>

	</div>
	<div style="display:none;" id="A_con2" class="content bgcolor3">
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td colspan="2" align="center" class="bigbigword"><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<td width="40%" align="center"><img src='<?php echo $data['image']; ?>' alt='<?php echo $data['name']; ?>'
						onload='resizeimg(260,260,this)' /></td>
				<td width="60%">
					<table width="100%" border="0" cellpadding="5" cellspacing="1">

						<tr>
							<td>项目分类：<?php echo $data['cname']; ?>-<?php echo $data['bname']; ?></td>
						</tr>
						
						<tr>
							<td>所在地区：</td>
						</tr>
						<tr>
							<td>
								投资金额：<?php if(($data['price'] == 1 )): ?>
								1-3万
								<?php elseif(($data['price'] == 2)): ?>
								3-5万
								<?php elseif(($data['price'] == 3)): ?>
								5-10万
								<?php elseif(($data['price'] == 4)): ?>
								10万以上
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>加盟电话：<?php echo substr($data['moblie'],0,3); ?>****<?php echo substr($data['moblie'],7,4); ?></td>
						</tr>
						<tr>
								<td>代理留言：<?php echo $data['sum']; ?> 条</td>
							</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input name="Submit" type="button" class="button_big" value="我想加盟该项目"
						onClick="location.href='#guestbook'" /></td>
			</tr>
		</table>

	</div>
	<div style="display:none;" id="A_con3" class="content">
		<table width="95%" border="0" cellpadding="7" cellspacing="1">
			<tr>
				<td>
					<p align="left">公司名称：<?php echo $data['company_name']; ?></p>
				</td>
			</tr>
			<tr>
				<td>公司地址：<?php echo $data['address']; ?></td>
			</tr>
			<td>企业介绍：
				<hr><?php echo $data['company_desc']; ?></td>
			</tr>
		</table>
	</div>



	<div class="titles">代理留言</div>
	<div class="content" style="text-align: center;">
		<form action="dl_liuyan_save.php" method="post" name="ly">
			<a name="guestbook" id="guestbook"></a>
			<?php echo token(); ?>
			<div class="liuyanbg">
				<table width="100%" border="0" cellpadding="5" cellspacing="0">
					<tr>
						<td>
							<input name="name" type="text" size="26" maxlength="50" onblur="check_somane()" placeholder="请输入姓名（必填）" />
							<span id="ts_name"></span>
							<input type="hidden" name="id"  value="<?php echo $data['id']; ?>" />
							<input type="hidden" name="company_id"  value="<?php echo $data['company_id']; ?>"/>
							<input type="hidden" name="url"  value="<?php echo url('/project_detail'); ?>/"/>
						</td>
					</tr>
					<tr>
						<td><input name='tel' type='text' id='tel' size='26' maxlength='50' onblur="check_mobile()" placeholder="请输入电话（必填）"/>
							<span id="phone"></span></td>
					</tr>
					<tr>
						<td><input name="email" type="text" id="email" size="26" maxlength="50" placeholder="请输入邮箱（可不填）"/></td>
					</tr>
					<tr>
						<td>
							<textarea rows=5 cols=30 name='contents' id='contents' onfocus='check_contents()'
								onblur='check_contents()'>我对这个产品感兴趣，请与我联系。</textarea>
							<input name="contents2" id="contents2" style="display:none" />
							<span id="ts_contents"></span>
							<br />
							<span class="liuyanbg2">
								<input name='chcontent' type='checkbox' id='chcontent1' onClick="showinfo('content',1)"
									value='有兴趣开一个店，请寄资料或给我打电话。' />
								<label for='chcontent1' id='content1'>有兴趣开一个店，请寄资料或给我打电话。 </label>
								<br />
								<input name='chcontent' type='checkbox' id='chcontent2' onClick="showinfo('content',2);"
									value='想了解招商细节，请尽快寄一份资料。' />
								<label for='chcontent2' id='content2'>想了解招商细节，请尽快寄一份资料。</label>
								<br />
								<input name='chcontent' type='checkbox' id='chcontent3' onClick="showinfo('content',3);"
									value='我想找一个合适的项目做，想加入您们。' />
								<label for='chcontent3' id='content3'>我想找一个合适的项目做，想加入您们。</label>
								<br />
								<input name='chcontent' type='checkbox' id='chcontent4' onClick="showinfo('content',4);"
									value='我加入你们后，您们还会提供哪些服务？' />
								<label for='chcontent4' id='content4'>我加入你们后，您们还会提供哪些服务？</label>
							</span>
						</td>
					</tr>
					<tr>
						<td align="center">
							<input type="button" onclick="CheckForms()"  name="tj" id="tj" value="提交" class="button_big" /> </td>
					</tr>
				</table>
			</div>
		</form>
	</div>
	<div style="height:30px"></div>
	<div id="divbottomtouming">
	</div>
	<div id="divbottom">
			招商电话：<a href="tel:<?php echo $web['web_phone']; ?>" style="color:#FFFFFF"><?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?></a>
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