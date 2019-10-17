<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/var/www/zs/public/../application/index/view/project/detail.html";i:1570419641;s:53:"/var/www/zs/application/index/view/common/header.html";i:1570444198;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570163017;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>太阳公公童装招商</title>
    <meta name="keywords" content="太阳公公童装招商" />
    <meta name="description" content="太阳公公童装招商" />
    <link href="./static/home/css/style.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/JavaScript" src="./static/home/js/zsshow.js"></script>
    <script type="text/javascript" src="./static/home/js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("#tel").blur(function() { //jquery 中change()函数  
                $("#ts_tel").load(encodeURI("../ajax/dl_liuyan_check_ajax.php?action=checktel&id=" + $("#tel").val()));
            });

        });
    </script>
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
    <SCRIPT type=text/javascript>
        kfguin = "357856668";
        ws = "zzcms项目加盟模板演示站";
        companyname = "在线客服";
        welcomeword = "您好,欢迎光临！<brT>请问,有什么可以帮到您的吗?";
        type = "1";
    </SCRIPT>
    <SCRIPT src="./static/home/js/kf.js" type=text/javascript></SCRIPT>
    <script language="JavaScript" src="./static/home/js/qt.js"></script>


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
                    <li><a href="/help.htm" target="_blank">使用帮助</a></li>
                    <li><a href="javascript:void(0)"
                            onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://3158.zzcms.net');">设为首页</a>
                    </li>
                    <li><a
                            href="javascript:window.external.addFavorite('http://3158.zzcms.net','zzcms项目加盟模板演示站');">收藏本站</a>
                    </li>
                    <li><a>手机站</a>
                        <ol class="sub">
                            <li><img src="./static/home/picture/ewm_xm.png" width="100"></li>
                        </ol>
                    </li>

                </ul>
            </div>

        </span>
        <h3>

            <?php if($user['nickname']): ?> 您好！
            <b><?php echo $user['nickname']; ?></b>&nbsp;[ <a href="/user/index.php">进入用户中心</a>&nbsp;|&nbsp;<a href="<?php echo url('/logout'); ?>">安全退出</a> ]&nbsp; <?php else: ?> 欢迎来到zzcms项目加盟模板演示站！
            <a href="<?php echo url('/login'); ?>" target='_blank'>登录</a> <a href="<?php echo url('/register'); ?>" target='_blank'>免费注册</a> <?php endif; ?>
        </h3>
    </div>
</div>

<div class="bgcolor1">
    <div class="main">
        <table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tr>
                <td width="300">
                    <a href="http://3158.zzcms.net"><img src="./static/home/picture/logo.png" border="0" alt="&lt;h1&gt;zzcms专业做招商网的程序源码&lt;/h1&gt;"></a>
                </td>
                <td>
                    <form action="/one/forsearch.php" method="get">
                        <div id="divselect">
                            <cite>招商</cite>
                            <ul>
                                <li><a href="javascript:;" selectid="zs">招商</a></li>
                                <li><a href="javascript:;" selectid="zx">资讯</a></li>
                            </ul>
                        </div>
                        <input name="kind" type="hidden" value="zs" id="inputselect" />
                        <input name="keyword" type="text" size="38" class="biaodan_search" autocomplete="off" x-webkit-speech /><input name="search" type="submit" border="0" class="buttons_search" value="搜索" />
                    </form>
                </td>
                <td width="100" align="center">
                    <input name="fbdl" type="button" border="0" id="fbdl" value="登记代理信息" onclick="window.open('http://3158.zzcms.net/dl/dladd.php')" /> </td>
                <td width="240" align="center">
                    <div class="bigbigword3 red">400-728-9861</div>
                    <div>客服电话: 8:30 - 18:00</div>
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
            <li><a href="<?php echo url('/project'); ?>"><?php echo $c['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

            <li><a href="<?php echo url('/article_list'); ?>">资讯列表</a></li>
            <li><a href="<?php echo url('/article_detail'); ?>">资讯详情</a></li>
            <li><a href="<?php echo url('/project'); ?>">项目列表 </a></li>
            <li><a href="<?php echo url('/project_detail'); ?>">项目详情</a></li>
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
        <a href="article_list"><?php echo $p['name']; ?></a> <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<?php endif; ?>


    <div class="main">

        <div style="float:right">留言数：0 条 </div>
        <div class="boxitem" id="A">
            <ul>
                <li><a id="A1" href="###" onmouseover="javascript:doClick(this,'A','current1')" class="current1">项目信息</a></li>
                <li><a id="A2" href="###" onmouseover="javascript:doClick(this,'A','current1')">公司信息</a></li>
                <li><a id="A3" href="###" onmouseover="javascript:doClick(this,'A','current1')">诚信认证</a></li>
            </ul>
        </div>

        <div style="display:block;" id="A_con1" class="content bgcolor3">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="33%" align="center">
                        <table width="300" height="300" border="0" cellpadding="5" cellspacing="1" bgcolor="dddddd">
                            <tr>
                                <td align="center" bgcolor="#FFFFFF"><img src='./static/home/picture/20180824203731559.jpg' alt='太阳公公童装' onload='resizeimg(260,260,this)' /></td>
                            </tr>
                        </table>
                    </td>
                    <td width="67%">
                        <table width="95%" border="0" cellpadding="8" cellspacing="1">
                            <tr>
                                <td>太阳公公童装</td>
                            </tr>
                            <tr>
                                <td> 项目分类：服装鞋包-女装</td>
                            </tr>
                            <tr>
                                <td>所在地区：内蒙古-请选择城区</td>
                            </tr>
                            <tr>
                                <td>投资金额：10-20万</td>
                            </tr>
                            <tr>
                                <td>加盟电话：13838064112</td>
                            </tr>
                            <tr>
                                <td>加盟手机：13838064112</td>
                            </tr>
                            <tr>
                                <td><input name="Submit" type="button" class="button_big" value="我想加盟该项目" onclick="location.href='#guestbook'" /></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </div>
        <div style="display:none;" id="A_con2" class="content">
            <table width="95%" border="0" cellpadding="7" cellspacing="1">
                <tr>
                    <td>
                        <p align="left">公司名称：河南大禹有限公司</p>
                    </td>
                </tr>
                <tr>
                    <td>公司地址：全国 全国各地区</td>
                </tr>
                <tr>
                    <td>企业介绍：&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-align: -webkit-right;&quot;&gt;公司简&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-align:
                        -webkit-right;&quot;&gt;公司简&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-align: -webkit-right;&quot;&gt;公司简&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family:
                        微软雅黑; font-size: 14px; text-align: -webkit-right;&quot;&gt;公司简&lt;/span&gt;</td>
                </tr>
            </table>
        </div>

        <div style="display:none;" id="A_con3" class="content">
            <table border="0" cellSpacing="1" cellPadding="5" width="100%">
                <tr>

                    <td align="middle">
                        <table class="bgcolor2" border="0" cellSpacing="1" cellPadding="1">
                            <tr>
                                <td bgColor="#ffffff" height="120" width="120" align="middle">
                                    <A href="http://3158.zzcms.net/uploadfiles/2018-08/20180830230243667.gif" target=_blank>
                                        <IMG alt="ASDF" src="./static/home/picture/20180830230243667_small.gif">
                                    </A>
                                </td>
                            </tr>
                            <tr>
                                <td align="middle">ASDF</td>
                            </tr>
                        </table>
                    </td>


                </tr>
            </table>
        </div>

        <!-- <div id='Layer1' style='position:absolute; width:950px; height:500px; z-index:1;'> 
<embed src="./static/home/flash/22934a16cf844b9f83c6c36023fc9bed.swf" width='1200' height="400" quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' wmode='transparent'></embed>
</div>-->


        <div class="content_sm">
            <img alt="荷百味荷叶饭快餐 好口碑，市场火 商机无限 28商机网_r2_c2.jpg" src="./static/home/picture/20180824203726239.jpg" style="border-bottom: 0px; text-align: center; border-left: 0px; margin: auto; width: 1200px; font-family: 微软雅黑; color: rgb(68,68,68); font-size: 14px; vertical-align: top; border-top: 0px; border-right: 0px"
                title="091460195587101653.jpg" /><img alt="荷百味荷叶饭快餐 好口碑，市场火 商机无限 28商机网_r3_c2.jpg" src="./static/home/picture/20180824203727124.jpg" style="border-bottom: 0px; text-align: center; border-left: 0px; margin: auto; width: 1200px; font-family: 微软雅黑; color: rgb(68,68,68); font-size: 14px; vertical-align: top; border-top: 0px; border-right: 0px"
                title="091460195590414353.jpg" /><img alt="荷百味荷叶饭快餐 好口碑，市场火 商机无限 28商机网_r4_c2.jpg" src="./static/home/picture/20180824203728452.jpg" style="border-bottom: 0px; text-align: center; border-left: 0px; margin: auto; width: 1200px; font-family: 微软雅黑; color: rgb(68,68,68); font-size: 14px; vertical-align: top; border-top: 0px; border-right: 0px"
                title="091460195592129865.jpg" /><img alt="荷百味荷叶饭快餐 好口碑，市场火 商机无限 28商机网_r5_c2.jpg" src="./static/home/picture/20180824203729428.jpg" style="border-bottom: 0px; text-align: center; border-left: 0px; margin: auto; width: 1200px; font-family: 微软雅黑; color: rgb(68,68,68); font-size: 14px; vertical-align: top; border-top: 0px; border-right: 0px"
                title="091460195595139461.jpg" /><img alt="荷百味荷叶饭快餐 好口碑，市场火 商机无限 28商机网_r6_c2.jpg" src="./static/home/picture/20180824203730185.jpg" style="border-bottom: 0px; text-align: center; border-left: 0px; margin: auto; width: 1200px; font-family: 微软雅黑; color: rgb(68,68,68); font-size: 14px; vertical-align: top; border-top: 0px; border-right: 0px"
                title="091460195598145920.jpg" /><img alt="荷百味荷叶饭快餐 好口碑，市场火 商机无限 28商机网_r7_c2.jpg" src="./static/home/picture/20180824203730801.jpg" style="border-bottom: 0px; text-align: center; border-left: 0px; margin: auto; width: 1200px; font-family: 微软雅黑; color: rgb(68,68,68); font-size: 14px; vertical-align: top; border-top: 0px; border-right: 0px"
                title="091460195602118238.jpg" />
        </div>

        <div class="pagebody">
            <form action="http://3158.zzcms.net/zs/dl_liuyan_save.php" method="post" name="ly" onSubmit="return CheckForms();" target="for_dl_liuyan_save">
                <a name="guestbook" id="guestbook"></a>
                <div class="liuyanbg">
                    <table width="100%" border="0" cellpadding="3" cellspacing="1">
                        <tr>
                            <td width="33%" align="right">联 系 人
                                <font color=#FF0000>*</font>
                            </td>
                            <td width="67%"> <input name="name" type="text" id="name" size=30 maxlength=50 onblur="check_somane()" />

                                <input id="cp" type="hidden" value="太阳公公童装" size="30" name="cp" />

                                <input name="name2" id="name2" style="display:none" />
                                <span id="ts_name"></span>

                                <input id="cpid" value="2" type="hidden" name="cpid" />

                                <input name="fbr" type="hidden" id="fbr" value="test" />

                                <input id="bigclassid" value="2" type="hidden" name="bigclassid" />

                                <input id="token" value="89cb22f13a921f9f174d6ca59b759060" type="hidden" name="token" /></td>
                        </tr>
                        <tr>
                            <td align="right">手机
                                <font color=#FF0000>*</font>
                            </td>
                            <td> <input name='tel' type='text' id='tel' size='30' maxlength='50' />
                                <input name="tel2" id="tel2" style="display:none" />
                                <span id="ts_tel"></span> </td>
                        </tr>
                        <tr>
                            <td align="right">电子邮箱：</td>
                            <td> <input name="email" type="text" id="email" size=30 maxlength=50 onblur="check_email()" />
                                <input name="email2" id="email2" style="display:none" />
                                <span id="ts_email"></span> </td>
                        </tr>
                        <tr>
                            <td align="right">留言内容
                                <font color=#FF0000>*</font>
                            </td>
                            <td>

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width='35%'><textarea rows=5 cols=30 name='contents' id='contents' onfocus='check_contents()' onblur='check_contents()'>我对这个产品感兴趣，请与我联系。</textarea>
                                            <input name="contents2" id="contents2" style="display:none" />
                                            <br/><span id="ts_contents"></span> </td>
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
                            <td><input type="submit" class="button_big" name="tj" id="tj" value="填好了，提交" /></td>
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
                    <td>招商电话：13838064112 </td>
                    <td align="right" style="font-size:18px">多咨询多留言，降低投资风险！</td>
                    <td><span class="bigbutton"><a href="#guestbook">马上留言</a></span></td>
                </tr>
            </table>
        </div>
    </div>

    <div style="height:10px;clear:both;"></div>
<div id="dlstepbox">
    <div class="main">
        <div id="dl5"></div>
        <div id="dlstep">
            <li id="dlstepli1">
                <div id="dlsteptitlein"><span>1 </span>登录网站</div>
                <div id="dlstepcontentin">输入http://3158.zzcms.net<br />网上搜索</div>
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
                <a href="/siteinfo-1.htm">公司简介</a>|<a href="/siteinfo-2.htm">联系方式</a>|<a href="/help.htm">帮助信息</a>|<a href="/link.htm">友情链接</a>|<a href="/sitemap.htm">网站地图</a></div>
            中华人民共和国电信与信息服务业务经营许可证： <a href="http://www.beian.miit.gov.cn" target="_blank">豫icp备07007271号</a><br /> zzcms项目加盟模板演示站版权所有 © Powered By
            <a target=_blank style="font-weight:bold;letter-spacing:1px;text-shadow:-1px 0 #FFF,0 1px #FFF,1px 0 #FFF,0 -1px #FFF;" href=http://www.zzcms.net>
                <font color=#FF6600 face=Arial>ZZ</font>
                <font color=#025BAD face=Arial>CMS2019</font>
            </a>
            <script type=text/javascript src=./static/home/js/713776.js>
            </script> <br /> zzcms项目加盟模板演示站只提供交易平台，对具体交易过程不参与也不承担任何责任。望供求双方谨慎交易。
        </div>
    </div>
</div>
<!--返回顶部-->
<script src="./static/home/js/scrolltop.js" type="text/javascript" language="JavaScript">
</script>
<div style="display: none" id="goTopBtn">
</DIV>
</body>

</html>