<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"/var/www/zs/public/../application/index/view/article/list.html";i:1570421060;s:53:"/var/www/zs/application/index/view/common/header.html";i:1570960684;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570958938;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>资讯</title>
    <meta name="keywords" content="资讯" />
    <meta name="description" content="资讯" />
    <link href="./static/home/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
                            <li><img src="/static/home/picture/ewm_xm.png" width="100"></li>
                        </ol>
                    </li>

                </ul>
            </div>

        </span>
        <h3>

            <?php if($user['nickname']): ?> 您好！
            <b><?php echo $user['nickname']; ?></b>&nbsp;[ <a href="<?php echo url('/user/index'); ?>">进入用户中心</a>&nbsp;|&nbsp;<a href="<?php echo url('/user/logout'); ?>">安全退出</a> ]&nbsp; <?php else: ?> 欢迎来到zzcms项目加盟模板演示站！
            <a href="<?php echo url('/user/login'); ?>" target='_blank'>登录</a> <a href="<?php echo url('/register'); ?>" target='_blank'>免费注册</a> <?php endif; ?>
        </h3>
    </div>
</div>

<div class="bgcolor1">
    <div class="main">
        <table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tr>
                <td width="300">
                    <a href="http://3158.zzcms.net"><img src="/static/home/picture/logo.png" border="0" alt="&lt;h1&gt;zzcms专业做招商网的程序源码&lt;/h1&gt;"></a>
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
        <div class="pagebody">
            <div class="left">
                <div class="station2">
                    <span><select name='menu1' onchange=MM_jumpMenu('parent',this,0)><option value='/zx/zx.php?b=2&s=&page=1&page_size=20' selected >20条/页</option><option value='/zx/zx.php?b=2&s=&page=1&page_size=50' >50条/页</option><option value='/zx/zx.php?b=2&s=&page=1&page=1&page_size=100' >100条/页</option></select></span>
                    <li class='start'><a href='http://3158.zzcms.net'>首页</a></li>
                    <li><a href='/zx/index.htm'>资讯</a></li>
                    <li><a href='/zx/2'>创业指南</a></li>
                </div>
                <div class="box boxbigclass">
                    <li><a href='/zx/1'>热点资讯</a></li>
                    <li><a href='/zx/2' class='current'>创业指南</a></li>
                    <li><a href='/zx/3'>最新动态</a></li>
                    <li><a href='/zx/4'>市场行情</a></li>
                    <li><a href='/zx/5'>最佳商机</a></li>
                    <li><a href='/zx/6'>项目分析</a></li>
                    <li><a href='/zx/7'>草根必读</a></li>
                    <li><a href='/zx/8'>创业经历</a></li>
                    <li><a href='/zx/9'>暴利行业</a></li>
                </div>

                <div class="content">
                    <div class="boxbigclass"></div>

                    <div class="bigbigword2"><a href='/zx/show-40.htm'>网上开店流程</a></div>
                    <div>如何在网上开店?在网上开店之前有哪些准备工作?今天，就为您介绍：网上开店的流程!希望能够帮助更多想要自己创业的朋友们，开一家的有竞争力的网店!网上开店的流程：1、前期准备很多朋友都想在网上开店，当问起.<a href='/zx/show-40.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：263</div>

                    <div class="bigbigword2"><a href='/zx/show-34.htm'>年轻人别老想着跳进创业这个巨坑</a></div>
                    <div>过去十年里，我身边的同龄人所谓的“创业”，至今没有看到成功的。无论是嫌钱少从体制内出去创业的；还是从什么MS、JPM之类高大上平台出来创业的；或者干脆是因为读不好书创业的；甚至是家里给了大把资金创业的.<a href='/zx/show-34.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：296</div>

                    <div class="bigbigword2"><a href='/zx/show-33.htm'>满足这三点，你就非常适合创业</a></div>
                    <div>选创业还是选就业?这个问题的确让人非常纠结。细看自己身边的朋友亲戚们，似乎都有那么几个成功创业的例子，同样也不乏创业失败，背负压力重回职场的人。为什么同样是创业，甚至做的还是差不多的职业，有的轻松成功.<a href='/zx/show-33.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：240</div>

                    <div class="bigbigword2"><a href='/zx/show-32.htm'>30岁以后才是一个更加合适创业的年龄</a>
                        <font color='#FF6600'>(图)</font>
                    </div>
                    <div>关于创业这事儿，不是年龄越大，创业的成功概率就越高，并没有必然联系。但是年龄越小，创业的成功概率就越低，是现实情况。多大年龄适合创业，其实——没有适合创业的年龄，只有适合创业的时机。创业是一个系统化工.<a href='/zx/show-32.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：282</div>

                    <div class="bigbigword2"><a href='/zx/show-31.htm'>创业时选项目要遵循的三大原则</a></div>
                    <div>俗话说“万事开头难”，这句说的一点没错，创业过程中也是如此，创业第一步就是选择项目，项目选不好基本上就不要谈创业，项目选的好才有可能更进一步。找创业项目没思路?小编就给大家带来选项目的三大原则，希望可.<a href='/zx/show-31.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：247</div>

                    <div class="bigbigword2"><a href='/zx/show-30.htm'>创业没有一帆风顺的，关键在于你是否能熬过去</a>
                        <font color='#FF6600'>(图)</font>
                    </div>
                    <div>创业何尝不是一场苦修?就像唐僧师徒西天取经，需得一步步走完九九八十一难，才能求得真经。你羡慕人家衣着光鲜的人走在大街上，殊不知这些人也是一点一点熬过来的。人生和创业都没有一帆风顺的，成功的关键在于你是.<a href='/zx/show-30.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：215</div>

                    <div class="bigbigword2"><a href='/zx/show-29.htm'>是谁杀死了大数据创业者？</a></div>
                    <div>“这两年在大数据领域，纯粹讲概念没有技术的公司都死完了。融资过很多的钱的企业虽然还存活着，但大多过的也很难受。”一位大数据领域的资深创业者，对创界网说出了整个业内的真实现状。从2016年开始，就有人喊.<a href='/zx/show-29.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：199</div>

                    <div class="bigbigword2"><a href='/zx/show-20.htm'>俞敏洪：创业者必须注意的四点常识</a></div>
                    <div>1、没有商业头脑，迟早要被玩死任何理想和梦想都是建立在现实的不堪之上。创业就像结婚，你首先要面对的是与恋爱时期不同的感情变化，那就是你结婚的对象有可能是一个不堪的男人或女人，而且你还要跟他/她过一辈子.<a href='/zx/show-20.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：235</div>

                    <div class="bigbigword2"><a href='/zx/show-14.htm'>开网店卖什么赚钱？</a>
                        <font color='#FF6600'>(图)</font>
                    </div>
                    <div>经常有某某开网店年入多少这样的新闻刺激着广大网民的视听，在这个网店盛行的年代，有的投资者就很想开一家网店，不仅工作时间自由，收入还很可观。有这样的想法，但是具体到要卖什么的时候就不知所措了。那么开网店.<a href='/zx/show-14.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-28 点击：205</div>

                    <div class="bigbigword2"><a href='/zx/show-13.htm'>乡镇适合开什么店</a></div>
                    <div>现如今农村人民生活水平不断提高，越来越多的人希望可以通过开店自主创业。从当前情况来看，很多人想要开设一家属于自己的店面，这样才可以轻轻松松把钱赚。时下很多人想要知道乡镇适合开什么店?这是许多人关注问题.<a href='/zx/show-13.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-28 点击：293</div>

                    <div class="bigbigword2"><a href='/zx/show-8.htm'>创业究竟有何魔力，让大伙对创业如此痴迷</a>
                        <font color='#FF6600'>(图)</font>
                    </div>
                    <div>自改革开放以来，我国政府对民众创业一直持支持态度，这一点在相关政策条例上就有最好的证明。可即使政府支持大众创业，但是各种创业失败的例子依然比比皆是。然而在创业这条路上，大家依然是有条件就上，没有条件创.<a href='/zx/show-8.htm'>[ 更多... ]</a></div>
                    <div style="margin-bottom:10px">发布时间：2018-10-29 点击：465</div>


                </div>
                <div class='fenyei'>
                    <form name='formpage' action='/zx/zx.php' method='get' target='_self' onsubmit='return checkpage();'>
                        <a>
                            <nobr>共11</nobr>
                        </a><span>1</span>
                        <input name='page' type='text' maxlength='10' value='1' class='biaodan' style='width:40px;' /><input type='submit' name='submit' value='GO' class='button' /><input name='b' type='hidden' value='2' /><input name='s' type='hidden'
                            value='0' /></form>
                </div>

            </div>
            <div class="right">
                <script language='javascript'>
                    linkarr = new Array();
                    picarr = new Array();
                    textarr = new Array();
                    var swf_width = 270;
                    var swf_height = 300;
                    //文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
                    var configtg = '0xffffff|0|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';

                    var files = "";
                    var links = "";
                    var texts = "";
                    picarr[1] = "/uploadfiles/2018-10/20181029090551730.jpg";
                    textarr[1] = "30岁以后才是一个更.";
                    linkarr[1] = "/zx/show-32.htm";
                    picarr[2] = "/uploadfiles/2018-10/20181029090030574.jpg";
                    textarr[2] = "创业没有一帆风顺的，.";
                    linkarr[2] = "/zx/show-30.htm";
                    picarr[3] = "/uploadfiles/2018-10/20181028070528449.jpg";
                    textarr[3] = "开网店卖什么赚钱？";
                    linkarr[3] = "/zx/show-14.htm";
                    picarr[4] = "/uploadfiles/2018-10/20181029090346824.jpg";
                    textarr[4] = "创业究竟有何魔力，让.";
                    linkarr[4] = "/zx/show-8.htm";
                    for (i = 1; i < picarr.length; i++) {
                        if (files == "") files = picarr[i];
                        else files += "|" + picarr[i];
                    }
                    for (i = 1; i < linkarr.length; i++) {
                        if (links == "") links = linkarr[i];
                        else links += "|" + linkarr[i];
                    }
                    for (i = 1; i < textarr.length; i++) {
                        if (texts == "") texts = textarr[i];
                        else texts += "|" + textarr[i];
                    }
                    document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="' + swf_width + '" height="' + swf_height + '">');
                    document.write('<param name="movie" value="/image/focus.swf"><param name="quality" value="high">');
                    document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
                    document.write('<param name="FlashVars" value="bcastr_file=' + files + '&bcastr_link=' + links + '&bcastr_title=' + texts + '">');
                    document.write('<embed src="/image/focus.swf" wmode="opaque" FlashVars="bcastr_file=' + files + '&bcastr_link=' + links + '&bcastr_title=' + texts + '& menu="false" quality="high" width="' + swf_width + '" height="' + swf_height + '" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
                    document.write('</object>');
                </script>
                <div class="titles"> 热门资讯</div>
                <div class="content1">
                    <ul>
                        <LI><span style='width:80px' title="阅465次">(465)</span>
                            <font class=xuhao1>01</font>
                            <A href=/zx/show-8.htm>创业究竟有何魔力，让.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅296次">(296)</span>
                            <font class=xuhao1>02</font>
                            <A href=/zx/show-34.htm>年轻人别老想着跳进创.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅293次">(293)</span>
                            <font class=xuhao1>03</font>
                            <A href=/zx/show-13.htm>乡镇适合开什么店</A>
                        </LI>
                        <LI><span style='width:80px' title="阅282次">(282)</span>
                            <font class=xuhao2>04</font>
                            <A href=/zx/show-32.htm>30岁以后才是一个更.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅263次">(263)</span>
                            <font class=xuhao2>05</font>
                            <A href=/zx/show-40.htm>网上开店流程</A>
                        </LI>
                        <LI><span style='width:80px' title="阅247次">(247)</span>
                            <font class=xuhao2>06</font>
                            <A href=/zx/show-31.htm>创业时选项目要遵循的.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅240次">(240)</span>
                            <font class=xuhao2>07</font>
                            <A href=/zx/show-33.htm>满足这三点，你就非常.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅235次">(235)</span>
                            <font class=xuhao2>08</font>
                            <A href=/zx/show-20.htm>俞敏洪：创业者必须注.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅215次">(215)</span>
                            <font class=xuhao2>09</font>
                            <A href=/zx/show-30.htm>创业没有一帆风顺的，.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅205次">(205)</span>
                            <font class=xuhao2>10</font>
                            <A href=/zx/show-14.htm>开网店卖什么赚钱？</A>
                        </LI>
                    </ul>
                </div>

                <div class="titles"> 最近更新</div>
                <div class="content1">
                    <ul>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao1>01</font>
                            <A href=/zx/show-40.htm>网上开店流程</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao1>02</font>
                            <A href=/zx/show-34.htm>年轻人别老想着跳进创业这.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao1>03</font>
                            <A href=/zx/show-33.htm>满足这三点，你就非常适合.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>04</font>
                            <A href=/zx/show-32.htm>30岁以后才是一个更加合.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>05</font>
                            <A href=/zx/show-31.htm>创业时选项目要遵循的三大.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>06</font>
                            <A href=/zx/show-30.htm>创业没有一帆风顺的，关键.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>07</font>
                            <A href=/zx/show-29.htm>是谁杀死了大数据创业者？</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>08</font>
                            <A href=/zx/show-20.htm>俞敏洪：创业者必须注意的.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-28</span>
                            <font class=xuhao2>09</font>
                            <A href=/zx/show-14.htm>开网店卖什么赚钱？</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-28</span>
                            <font class=xuhao2>10</font>
                            <A href=/zx/show-13.htm>乡镇适合开什么店</A>
                        </LI>
                    </ul>
                </div>

            </div>
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
            <script type=text/javascript src=/static/home/js/713776.js>
            </script> <br /> zzcms项目加盟模板演示站只提供交易平台，对具体交易过程不参与也不承担任何责任。望供求双方谨慎交易。
        </div>
    </div>
</div>
<!--返回顶部-->
<script src="/static/home/js/scrolltop.js" type="text/javascript" language="JavaScript">
</script>
<div style="display: none" id="goTopBtn">
</DIV>
</body>

</html>