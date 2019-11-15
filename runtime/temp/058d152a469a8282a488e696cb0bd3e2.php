<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\Project\zhaoshang\public/../application/index/view/project/detail.html";i:1573297379;s:60:"D:\Project\zhaoshang\application\index\view\common\head.html";i:1573357118;s:62:"D:\Project\zhaoshang\application\index\view\common\header.html";i:1573272021;s:62:"D:\Project\zhaoshang\application\index\view\common\footer.html";i:1573375824;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $data['name']; ?></title>
    <meta name="keywords" content="<?php echo $data['keywords']; ?>" />
    <meta name="description" content="<?php echo $data['description']; ?>" />
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
<meta name="baidu-site-verification" content="<?php echo $web['web_baidu']; ?>">
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/<?php echo $web['web_53kf']; ?>";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>


  
    <style type="text/css">
        body {
            background: url({#bodybg}) {
                #bodybgrepeat
            }
            ;
        }
    </style>
</head>

<body>


    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-09 12:00:21
 * @LastEditTime: 2019-11-09 12:00:21
 -->
<div class="main">
    <div id="banner"><span>关闭</span></div>
</div>

<script type="text/javascript">
    $(function() {
        $.divselect("#divselect", "#inputselect");
    });
</script>
<div class="top1">
    <div class="main">
        <span>
            <div>
                <ul class="menu">
                    <li><a href="<?php echo url('/help'); ?>" target="_blank">使用帮助</a></li>
                    <li><a href="javascript:void(0)"
                            onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('');">设为首页</a>
                    </li>
                    <li><a
                            href="javascript:window.external.addFavorite('/','zzcms项目加盟模板演示站');">收藏本站</a>
                    </li>
                    <li><a>手机站</a> 
                    <ol class="sub">
                            <li><img src="<?php echo $web['web_ewm']; ?>" width="100"></li>
                        </ol>
                    </li>
                </ul>
            </div>

        </span>
        <h3>

            <?php if($user['nickname']): ?> 您好！
            <b><?php echo $user['nickname']; ?></b>&nbsp;[ <a target="_bank" href="<?php echo url('menber/user/index'); ?>">进入用户中心</a>&nbsp;|&nbsp;<a href="<?php echo url('menber/user/logout'); ?>">安全退出</a> ]&nbsp; <?php else: ?> 欢迎来到 <?php echo $web['web_name']; ?>站！
            <a href="<?php echo url('menber/user/login'); ?>" target='_blank'>登录</a> <a href="<?php echo url('menber/user/register'); ?>" target='_blank'>免费注册</a> <?php endif; ?>
        </h3>
    </div>
</div>

<div class="bgcolor1">
    <div class="main">
        <table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tr>
                <td width="300">
                    <a href="/"><img src="<?php echo $web['web_logo']; ?>" border="0" alt="<?php echo $web['web_name']; ?>"></a>
                </td>
                <td>
                    <form action="<?php echo url('/search'); ?>" method="post">
                        <div id="divselect">
                            <select name="type" style="width: 60px;height: 40px;background-color: #fff;font-size: 16px;">
                                <option value="project">招 商</option>
                                <option value="article">资 讯</option>
                            </select>
                        </div>
                        <input name="keyword" type="text" size="38" class="biaodan_search" autocomplete="off" x-webkit-speech />
                        <input  type="submit" border="0" class="buttons_search" value="搜索" />
                    </form>
                </td>
                <td width="240" align="center">
                    <div class="bigbigword3 red"><?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?></div>
                    <div>客服时间: 8:30 - 18:00</div>
                </td>
            </tr>
        </table>

    </div>
</div>

<div class="nav2" id="nav">
    <div class="main">
        <ul>
            <li class="current"><a href="<?php echo url('/'); ?>">首页</a></li>
            <?php if(is_array($project_cate) || $project_cate instanceof \think\Collection || $project_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $project_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('/project'); ?>/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a href="<?php echo url('/article'); ?>">资讯</a></li>
            <li><a href="<?php echo url('/ranking'); ?>">排行</a></li>
            <li><a href="<?php echo url('/help'); ?>">帮助</a></li>
        </ul>
    </div>
</div>

<?php if($url != "Indexindex"): ?>   
<div class="item2">
    <div class="main">
        <?php if(is_array($article_cate) || $article_cate instanceof \think\Collection || $article_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $article_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo url('/article_list'); ?>/<?php echo $p['id']; ?>"><?php echo $p['name']; ?></a> <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<?php endif; ?>


    <div class="main">

        <div style="float:right">留言数：<?php echo $data['sum']; ?> 条 </div>
        <div class="boxitem" id="A">
            <ul>
                <li><a id="A3" href="###" onmouseover="javascript:doClick(this,'A','current1')" class="current1">项目详情</a></li>
                <li><a id="A2" href="###" onmouseover="javascript:doClick(this,'A','current1')">企业信息</a></li>
                <li><a id="A1" href="###" onmouseover="javascript:doClick(this,'A','current1')" >项目海报</a></li>
            </ul>
        </div>

        <div style="display:none;" id="A_con1" class="content">
            <?php echo $data['poster']; ?>
        </div>
        <div style="display:none;" id="A_con2" class="content">
            <table width="95%" border="0" cellpadding="7" cellspacing="1">
                <tr>
                    <td>
                        <p align="left">公司名称：<?php echo $data['company_name']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>公司地址：<?php echo $data['address']; ?></td>
                </tr>
                    <td>企业介绍：<hr><?php echo $data['company_desc']; ?></td>
                </tr>
            </table>
        </div>

        <div style="display:block;" id="A_con3" class="content bgcolor3" >
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="33%" align="center">
                                <table width="300" height="300" border="0" cellpadding="5" cellspacing="1" bgcolor="dddddd">
                                    <tr>
                                        <td align="center" bgcolor="#FFFFFF"><img src='<?php echo $data['image']; ?>' alt='<?php echo $data['name']; ?>' onload='resizeimg(260,260,this)' /></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="67%">
                                <table width="95%" border="0" cellpadding="8" cellspacing="1">
                                    <tr>
                                        <td><?php echo $data['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td> 项目分类：<?php echo $data['cname']; ?>-<?php echo $data['bname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>所在地区：<?php echo $data['areaname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>投资金额：<?php if(($data['price'] == 1 )): ?>
                                                1-3万
                                                <?php elseif(($data['price'] == 2)): ?>
                                                3-5万
                                                <?php elseif(($data['price'] == 3)): ?>
                                                5-10万
                                                <?php elseif(($data['price'] == 4)): ?>
                                                10万以上
                                            <?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td>加盟电话：<?php echo substr($data['moblie'],0,3); ?>****<?php echo substr($data['moblie'],7,4); ?></td>
                                    </tr>
                                    <tr>
                                        <td><input name="Submit" type="button" class="button_big" value="我想加盟该项目" onclick="location.href='#guestbook'" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <?php echo $data['content']; ?>
        </div>

        <div class="pagebody">
            <form action="" method="post" name="ly"  target="for_dl_liuyan_save">
                    <?php echo token(); ?>
                <a name="guestbook" id="guestbook"></a>
                <div class="liuyanbg">
                    <table width="100%" border="0" cellpadding="3" cellspacing="1">
                        <tr>
                            <td width="33%" align="right">联 系 人
                                <font color=#FF0000>*</font>
                            </td>
                            <td width="67%"> <input name="name" type="text" id="name" size=30 maxlength=20 onblur="check_somane()" />
                                <input type="hidden" name="id"  value="<?php echo $data['id']; ?>"/>
                                <input type="hidden" name="company_id"  value="<?php echo $data['company_id']; ?>"/>
                                <input type="hidden" name="url"  value="<?php echo url('/project_detail'); ?>/"/>
                                <span id="ts_name"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">手机
                                <font color=#FF0000>*</font>
                            </td>
                            <td> <input name='tel' type='text' id='tel' size='30' maxlength='11' onblur="check_mobile()" />
                                <span id="phone"></span> 
                            </td>
                        </tr>
                        <tr>
                            <td align="right">电子邮箱：</td>
                            <td> <input name="email" type="text" id="email" size=30 maxlength=50  />
                                <span id="ts_email">(选填)</span> 
                            </td>
                        </tr>
                        <tr>
                            <td align="right">留言内容
                                <font color=#FF0000>*</font>
                            </td>
                            <td>

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width='35%'><textarea rows=5 cols=30 name='contents' maxlength="200" id='contents' onfocus='check_contents()' onblur='check_contents()'>我对这个产品感兴趣，请与我联系。</textarea>
                                            <br/><span id="ts_contents"></span> 
                                        </td>
                                        <td width='65%' class="liuyanbg2">
                                            <input name='chcontent' type='checkbox' id='chcontent1' onclick="showinfo('content',1);" value='有兴趣开一个店，请寄资料或给我打电话。' />
                                            <label for='chcontent1' id='content1'>有兴趣开一个店，请寄资料或给我打电话。</label>
                                            <br />
                                            <input name='chcontent' type='checkbox' id='chcontent2' onclick="showinfo('content',2);" value='想了解招商细节，请尽快寄一份资料。' />
                                            <label for='chcontent2' id='content2'>想了解招商细节，请尽快寄一份资料。</label>
                                            <br />
                                            <input name='chcontent' type='checkbox' id='chcontent3' onclick="showinfo('content',3);" value='我想找一个合适的项目做，想加入您们。' />
                                            <label for='chcontent3' id='content3'>我想找一个合适的项目做，想加入您们。</label>
                                            <br />
                                            <input name='chcontent' type='checkbox' id='chcontent4' onclick="showinfo('content',4);" value='我加入你们后，您们还会提供哪些服务？' />
                                            <label for='chcontent4' id='content4'>我加入你们后，您们还会提供哪些服务？</label> </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">&nbsp;</td>
                            <td><input type="button" onclick="CheckForms()" class="button_big" id="tj" value="填好了，提交" /></td>
                        </tr>
                    </table>
                </div>
            </form>
            <iframe name="for_dl_liuyan_save" frameborder="0" height="0" width="0"></iframe>
        </div>
    </div>

    <div style="height:100px"></div>
    <div id="divbottomtouming"></div>
    <div id="divbottom">
        <div class="main">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>招商电话：<?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?> </td>
                    <td align="right" style="font-size:18px">多咨询多留言，降低投资风险！</td>
                    <td><span class="bigbutton"><a href="#guestbook">马上留言</a></span></td>
                </tr>
            </table>
        </div>
    </div>

    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-07 18:30:41
 * @LastEditTime: 2019-11-10 16:50:23
 -->
<div style="height:10px;clear:both;"></div>
<div id="dlstepbox" >
    <div class="main">
        <div id="dl5"></div>
        <div id="dlstep">
            <li id="dlstepli1">
                <div id="dlsteptitlein"><span>1 </span>登录网站</div>
                <div id="dlstepcontentin">输入http://9118.com<br />网上搜索</div>
            </li>
            <li id="dlstepli2">
                <div id="dlsteptitlein"><span>2 </span>寻找意向产品</div>
                <div id="dlstepcontentin">点击广告位查找<br />热门产品查找<br />根据搜索查找</div>
            </li>
            <li id="dlstepli3">
                <div id="dlsteptitlein"><span>3 </span>留言，电话咨询</div>
                <div id="dlstepcontentin">电话咨询厂家<br />页面留言咨询<br />在线咨询</div>
            </li>
            <li id="dlstepli4">
                <div id="dlsteptitlein"><span>4 </span>双方洽谈</div>
                <div id="dlstepcontentin">双方沟通相关事宜<br />代理要求<br />厂家政策支持</div>
            </li>
            <li id="dlstepli5">
                <div id="dlsteptitlein"><span>5 </span>合作成功</div>
                <div id="dlstepcontentin">进行考察核实<br />签订合同<br />代理成功</div>
            </li>
        </div>
    </div>
</div>

<div class="bottom">
    <div class="main">
        <div class="bottominner">
            <div class="bottomlink">
                <a href="/">公司简介</a>|<a href="/siteinfo-2.htm">联系方式</a>|<a href="<?php echo url('/help'); ?>">帮助信息</a>|<a href="<?php echo url('/link'); ?>">友情链接</a>|<a href="/sitemap.htm">网站地图</a></div>
                <a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo $web['web_icp']; ?></a> <img src="/static/home/images/ghs.png"><a href="http://www.beian.gov.cn/portal/index.do" target="_blank"><?php echo $web['web_beian']; ?></a> <br /> 
            <script type=text/javascript src=/static/home/js/713776.js>
            </script> <br /> <?php echo $web['web_copyright']; ?>
        </div>
    </div>
</div>
<!--返回顶部-->
<script src="/static/home/js/scrolltop.js" type="text/javascript" language="JavaScript"></script>

<div style="display: none" id="goTopBtn"></div>

    <script src="/static/home/js/msg.js" type="text/javascript" language="JavaScript"></script>

</body>

</html>