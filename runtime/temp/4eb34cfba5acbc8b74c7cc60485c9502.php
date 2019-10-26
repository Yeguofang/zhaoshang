<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/var/www/zs/public/../application/index/view/article/detail.html";i:1570420958;s:53:"/var/www/zs/application/index/view/common/header.html";i:1572056603;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570958938;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>顾客进店后，你可千万不要这么说！资讯</title>
    <meta name="keywords" content="顾客进店后，你可千万不要这么说！资讯" />
    <meta name="description" content="资讯" />
    <link href="./static/home/css/style.css" rel="stylesheet" type="text/css">
    <script src="./static/home/js/artdialog.js"></script>
    <script src="./static/home/js/iframetools.js"></script>
    <script language="JavaScript" src="./static/home/js/jquery.js"></script>
    <script src="./static/home/js/jquery.lazyload.js"></script>
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

        function checkform() {
            if (document.form2.content.value == "") {
                alert("内容不能为空！");
                //document.form2.content.focus();
                return false;
            }
        }

        function OpenAndDataFunc() {
            var dialog = art.dialog.open('../user/login2.php?fromurl=http://3158.zzcms.net/zx/show.php?id=41', {
                title: "用户登录",
                lock: true,
                width: 400,
                height: 200
            }, false);
        }
    </script>
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
            <b><?php echo $user['nickname']; ?></b>&nbsp;[ <a target="_bank" href="<?php echo url('menber/user/index'); ?>">进入用户中心</a>&nbsp;|&nbsp;<a href="<?php echo url('menber/user/logout'); ?>">安全退出</a> ]&nbsp; <?php else: ?> 欢迎来到zzcms项目加盟模板演示站！
            <a href="<?php echo url('menber/user/login'); ?>" target='_blank'>登录</a> <a href="<?php echo url('menber/user/register'); ?>" target='_blank'>免费注册</a> <?php endif; ?>
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
        <div class="station">
            <h3>
                <li class='start'><a href='http://3158.zzcms.net'>首页</a></li>
                <li><a href='/zx/index.htm'>资讯</a></li>
                <li><a href='/zx/5'>最佳商机</a></li>
                <li>
                    <a href='/zx/5/0'></a>
                </li>
            </h3>
        </div>
        <div class="pagebody">
            <div class="left">
                <div class="box">
                    <div id="BoxInfoTitle">顾客进店后，你可千万不要这么说！</div>
                    <div id="BoxInfoTitleNext">
                        来源：&nbsp;&nbsp;发布日期：2018-10-29&nbsp;&nbsp;发布者：&nbsp;&nbsp;共阅254次  字体：<a href='javascript:fontZoom(22)'>大</a> <a href='javascript:fontZoom(14)'>中</a> <a href='javascript:fontZoom(12)'>小</a>
                    </div>
                    <div id="fontzoom">
                        作为一名销售，在顾客进店后表现出足够的热情是必须的操作。在这个时候，我们和顾客所说的第一句话就显得非常重要了。那么，当顾客进店以后，我们应当注意哪些话术呢?<img max-width="600" src="./static/home/picture/20181029092216596.jpg" />千万不要问：“今天想买什么呢?”在顾客进入店铺后，绝大多数的导购都会在欢迎光临后自然而然的加一句“想买点什么呢?”其实，这句看似平常的话就已经为你销售的失败埋下了伏笔。试想一下，如果你是顾客，当导购问你今天想买什么的时候，你会怎样回答呢?基本上不是沉默，就是“随便看看”了吧。如果在这样的基础上你还在追问的话，那么你的顾客可能就会逃也似的离开你的店铺了。也就是说，这句话是用来赶走你的顾客，而非达成交易的开场白。这句话失败率这么高的原因就在于，任何一个顾客在刚进店的时候，对导购都是抱着一个防备的心理的。如果你在他还没有对你放松警惕的时候直接使用了销售意味如此强的开场白，就会进一步激起客户的自我保护，基本上就是打算离店了。最好别说：“喜欢的话可以试一下”这句话其实本身没有什么太大的问题，但是使用的时机非常关键。如果我们是在还未完成破冰的情况下使用这句话，很大程度上会让顾客认为你的推销意图过于明显，自然，也会给顾客很大的压力。如果你是在这样的情况下说出了这句话，那么除非顾客真的很喜欢这件衣服，否则他就很有可能转一圈后牛头离开了。对于销售而言，最好的开场，就是非销式的开场了。我们看完了可能会将顾客“赶出去”的话术，是时候看看好好接待顾客的话术了。所谓的非销式话术，基本上可以理解为赞美和闲聊式的话术了。比如我们可以询问他们是否用过餐，赞美他们身上有特点的物件或者关心地询问他们的近况等。一般情况下，当我们打完招呼后选择了轻松的话术来开场，顾客也往往会回以一笑，然后给你回应，这样做我们的破冰也可谓是完成了一半，成交率也会大大提高。当然，如果是生客的话，就要留意客户在什么产品上留意较多，可以直接为他介绍产品。在销售过程中，还有哪些重点是我们需要注意的呢?一、主观性议题作为一个销售人员，要时刻注意在商言商，不要参与一些关于宗教或者政治的话题，这对我们的销售没有任何的实际意义。很多销售新人都会出现和客户讨论一些主观问题，争得面红耳赤的现象;这样做即使我们“占了上风”，可能也会黄了销售，得不偿失。所以一般情况下，有经验的销售只会在开始的时候随着顾客的观点来展开讨论，然后尽快将话题引入我们在推销的产品上。对销售无关的事情，作为销售的我们一定要学会放下或者尽量做到闭口不谈。二、实事求是千万不要夸大产品的功能，因为客户一定会在日后的日子里明白你说的话是真是假。会做生意的人是在剪羊毛，剪了一茬还会有一茬;不会做生意的人就像是在杀猪，只会做一刀子买卖。任何产品都存在优缺点，作为销售的我们需要专业的去帮助客户分析产品的优势和劣势的同时熟悉市场，让顾客心服口服。一定要记住，在销售过程中，任何欺骗和谎言都是一颗注定会爆炸的定时炸弹，是销售的天敌。三、不谈隐私作为销售，体会客户心理是必须的，但是体会客户的心理和了解客户的隐私是两个完全不同的概念。同样的，也不要把自己的隐私作为和客户的谈资。这种八卦式的谈话对业绩可以说是毫无意义，而且会浪费我们推销的商机。四、尽量少说质疑性的话题很多销售似乎让“你懂吗?”，“你知道吗”或者“你明白我的意思吗”当成了和顾客交流时的口头禅。即使我们担心顾客听不懂，也不应该用这种老师的口吻去和顾客说话。换位思考一下，如果我们在购物的时候被这样询问，心里想必也是非常不快的吧。如果我们实在是担心顾客不明白我们的讲解，可以使用试探的口吻去询问，比如：“您有需要我再详细说明的地方吗?”这样的说法，会让顾客更容易接受我们。五、回避不雅之言每个人都希望自己交往的人是有涵养，有水平的。所以如果一个销售人员出口成脏，就不可避免的会对他的销售业绩产生很大的影响。优雅的谈吐可能不能助你走上成功的道路，但是粗鄙之语一定会断送你的上升阶梯。
                    </div>
                    <div style="text-align:center;padding:10px;">
                        <a href="http://www.jiathis.com/share/" class="jiathis" target="_blank">[分享到...]</a>
                        <script type="text/javascript" src="./static/home/js/jia.js" charset="utf-8"></script>
                        <a href="javascript:printcontent()" target="_self">
          [打印本文]</a> <a href='#top'>[返回顶部]</a>
                        <a href="javascript:window.close()">
          [关闭该页]</a>
                    </div>
                </div>

                <div class="box">
                    上一篇文章：<a href=/zx/show-40.htm>网上开店流程</a><br/> 下一篇文章：<a href=/zx/show-42.htm>智能家居新的创业时代已经来临！</a>
                </div>
                <div class="titles">
                    <h3>网友评论</h3>
                </div>
                <div class="content1">
                    &nbsp;暂无评论
                </div>
                <div class="titles">
                    <h3>发表评论</h3>
                </div>
                <div class="content1">
                    <form name="form2" id="form2" method="post" action="" onSubmit="return checkform()">
                        <div>
                            <div contenteditable="true" id="divtextarea" onblur="AddContentFromDiv('content','divtextarea')"></div>

                            <input name="content" type="text" id="content" style="display:none" size="22" maxlength="255">
                            <input name="about" type="hidden" id="about4" value="41" />
                            <input name="ip" type="hidden" id="ip4" value="183.6.99.116" />
                            <input name="action" type="hidden" id="ip" value="addpinglun" />
                            <span style="text-align:right">
              <input name="user" type="hidden"  id="username3" tabindex="1" value="" size="17" />
            </span></div>
                        <div><input type="submit" name="Submit" value="发表评论" /></div>
                    </form>
                </div>
            </div>
            <div class="right">

                <div class="titles"><span> </span>
                    <h3>热门资讯</h3>
                </div>
                <div class="content1">
                    <ul>
                        <LI><span style='width:80px' title="阅832次">(832)</span>
                            <font class=xuhao1>01</font>
                            <A href=/zx/show-38.htm>淘宝主播5小时直播卖.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅547次">(547)</span>
                            <font class=xuhao1>02</font>
                            <A href=/zx/show-1.htm>百年巨头倒闭！8万人.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅515次">(515)</span>
                            <font class=xuhao1>03</font>
                            <A href=/zx/show-22.htm>香飘飘大败局！从1年.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅465次">(465)</span>
                            <font class=xuhao2>04</font>
                            <A href=/zx/show-8.htm>创业究竟有何魔力，让.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅425次">(425)</span>
                            <font class=xuhao2>05</font>
                            <A href=/zx/show-3.htm>农村不起眼的商机都有.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅423次">(423)</span>
                            <font class=xuhao2>06</font>
                            <A href=/zx/show-5.htm>创业好项目的几个基本.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅337次">(337)</span>
                            <font class=xuhao2>07</font>
                            <A href=/zx/show-15.htm>开童车店需要多少钱</A>
                        </LI>
                        <LI><span style='width:80px' title="阅329次">(329)</span>
                            <font class=xuhao2>08</font>
                            <A href=/zx/show-9.htm>试发一条，试发一条</A>
                        </LI>
                        <LI><span style='width:80px' title="阅324次">(324)</span>
                            <font class=xuhao2>09</font>
                            <A href=/zx/show-68.htm>创业三宝：找人找钱找.</A>
                        </LI>
                        <LI><span style='width:80px' title="阅318次">(318)</span>
                            <font class=xuhao2>10</font>
                            <A href=/zx/show-19.htm>胶囊旅馆投资多少钱？</A>
                        </LI>
                    </ul>
                </div>

                <div class="titles"><span> </span>
                    <h3>最新资讯</h3>
                </div>
                <div class="content1">
                    <ul>
                        <LI><span style='width:80px'>2019-09-06</span>
                            <font class=xuhao1>01</font>
                            <A href=/zx/show-92.htm>123</A>
                        </LI>
                        <LI><span style='width:80px'>2018-12-05</span>
                            <font class=xuhao1>02</font>
                            <A href=/zx/show-91.htm>l[pl[p</A>
                        </LI>
                        <LI><span style='width:80px'>2018-11-14</span>
                            <font class=xuhao1>03</font>
                            <A href=/zx/show-90.htm>美国的开学第一课：奥巴马.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>04</font>
                            <A href=/zx/show-88.htm>创业热门项目知多少</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>05</font>
                            <A href=/zx/show-87.htm>无本钱创业真的靠谱吗</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>06</font>
                            <A href=/zx/show-86.htm>农村致富项目有哪些</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>07</font>
                            <A href=/zx/show-85.htm>符合哪些条件的创业项目才.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>08</font>
                            <A href=/zx/show-84.htm>深受创业者喜爱的创业小项.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>09</font>
                            <A href=/zx/show-83.htm>想要快速赚钱就来选月入2.</A>
                        </LI>
                        <LI><span style='width:80px'>2018-10-29</span>
                            <font class=xuhao2>10</font>
                            <A href=/zx/show-82.htm>向大家介绍一些有前景的创.</A>
                        </LI>
                    </ul>
                </div>

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
                    picarr[1] = "/uploadfiles/2019-09/20190906085558520.png";
                    textarr[1] = "123";
                    linkarr[1] = "/zx/show-92.htm";
                    picarr[2] = "/uploadfiles/2018-11/20181108091715156.jpg";
                    textarr[2] = "美国的开学第一课：奥.";
                    linkarr[2] = "/zx/show-90.htm";
                    picarr[3] = "/uploadfiles/2018-10/20181029151902310.jpg";
                    textarr[3] = "男人到了不惑之年是打.";
                    linkarr[3] = "/zx/show-63.htm";
                    picarr[4] = "/uploadfiles/2018-10/20181029151634792.jpg";
                    textarr[4] = "创业为什么说抓机会比.";
                    linkarr[4] = "/zx/show-61.htm";
                    picarr[5] = "/uploadfiles/2018-10/20181029092216596.jpg";
                    textarr[5] = "顾客进店后，你可千万.";
                    linkarr[5] = "/zx/show-41.htm";
                    picarr[6] = "/uploadfiles/2018-10/20181029091648306.jpg";
                    textarr[6] = "淘宝主播5小时直播卖.";
                    linkarr[6] = "/zx/show-38.htm";
                    picarr[7] = "/uploadfiles/2018-10/20181029091205771.jpg";
                    textarr[7] = "如何寻找创业新点子？.";
                    linkarr[7] = "/zx/show-36.htm";
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
            </div>
        </div>
        <div class="bordercccccc">
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                    <td style='width:20%;' valign="top">
                        <div class='titles'><span><a href='/zx/1'> 更多...</a></span>
                            <h3>热点资讯</h3>
                        </div>
                        <div class='content2'>
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="90px">
                                        <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                            <tr>
                                                <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                    <A href="/zx/show-92.htm" target="_blank"><img data-original="./static/home/picture/20190906085558520_small.png" border="0" onload=resizeimg(90,90,this)></A>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style='padding-left:5px'>
                                        <A href="/zx/show-92.htm" target="_blank">
                                            <b>123</b><br></a>
                                    </td>
                                </tr>
                </tr>
                </table>
                <div class="boxxian"></div>
                <ul>
                    <LI>
                        <font class=xuhao1>01</font>
                        <A href=/zx/show-92.htm>123</A>
                    </LI>
                    <LI>
                        <font class=xuhao1>02</font>
                        <A href=/zx/show-91.htm>l[pl[p</A>
                    </LI>
                    <LI>
                        <font class=xuhao1>03</font>
                        <A href=/zx/show-22.htm>香飘飘大败局！从1年卖出10.</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>04</font>
                        <A href=/zx/show-19.htm>胶囊旅馆投资多少钱？</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>05</font>
                        <A href=/zx/show-18.htm>开个五金店怎样入手</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>06</font>
                        <A href=/zx/show-17.htm>开个鞋店大概多少钱</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>07</font>
                        <A href=/zx/show-9.htm>试发一条，试发一条</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>08</font>
                        <A href=/zx/show-7.htm>教育加盟什么品牌好呢</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>09</font>
                        <A href=/zx/show-6.htm>地摊低成本创业都适合什么样的.</A>
                    </LI>
                    <LI>
                        <font class=xuhao2>10</font>
                        <A href=/zx/show-5.htm>创业好项目的几个基本特点</A>
                    </LI>
                </ul>
                </div>
                </td>
                <td style='width:20%;' valign="top">
                    <div class='titles'><span><a href='/zx/2'> 更多...</a></span>
                        <h3>创业指南</h3>
                    </div>
                    <div class='content2'>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="90px">
                                    <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                        <tr>
                                            <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                <A href="/zx/show-32.htm" target="_blank"><img data-original="./static/home/picture/20181029090551730_small.jpg" border="0" onload=resizeimg(90,90,this)></A>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style='padding-left:5px'>
                                    <A href="/zx/show-32.htm" target="_blank">
                                        <b>30岁以后才是一个更.</b><br>关于创业这事儿，不是年龄越大，创业的成功概率就越高，并没有必然联系.</a>
                                </td>
                            </tr>
                            </tr>
                        </table>
                        <div class="boxxian"></div>
                        <ul>
                            <LI>
                                <font class=xuhao1>01</font>
                                <A href=/zx/show-40.htm>网上开店流程</A>
                            </LI>
                            <LI>
                                <font class=xuhao1>02</font>
                                <A href=/zx/show-34.htm>年轻人别老想着跳进创业这个巨.</A>
                            </LI>
                            <LI>
                                <font class=xuhao1>03</font>
                                <A href=/zx/show-33.htm>满足这三点，你就非常适合创业</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>04</font>
                                <A href=/zx/show-32.htm>30岁以后才是一个更加合适创.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>05</font>
                                <A href=/zx/show-31.htm>创业时选项目要遵循的三大原则</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>06</font>
                                <A href=/zx/show-30.htm>创业没有一帆风顺的，关键在于.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>07</font>
                                <A href=/zx/show-29.htm>是谁杀死了大数据创业者？</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>08</font>
                                <A href=/zx/show-20.htm>俞敏洪：创业者必须注意的四点.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>09</font>
                                <A href=/zx/show-14.htm>开网店卖什么赚钱？</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>10</font>
                                <A href=/zx/show-13.htm>乡镇适合开什么店</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                <td style='width:20%;' valign="top">
                    <div class='titles'><span><a href='/zx/3'> 更多...</a></span>
                        <h3>最新动态</h3>
                    </div>
                    <div class='content2'>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="90px">
                                    <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                        <tr>
                                            <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                <A href="/zx/show-36.htm" target="_blank"><img data-original="./static/home/picture/20181029091205771_small.jpg" border="0" onload=resizeimg(90,90,this)></A>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style='padding-left:5px'>
                                    <A href="/zx/show-36.htm" target="_blank">
                                        <b>如何寻找创业新点子？.</b><br>创业赚钱的项目一直有很多，但是适合你的可能就只有那一两个，很多人创.</a>
                                </td>
                            </tr>
                            </tr>
                        </table>
                        <div class="boxxian"></div>
                        <ul>
                            <LI>
                                <font class=xuhao1>01</font>
                                <A href=/zx/show-52.htm>抓住“银发经济”时机，把老年.</A>
                            </LI>
                            <LI>
                                <font class=xuhao1>02</font>
                                <A href=/zx/show-50.htm>在国家推动和土地流转趋势下，.</A>
                            </LI>
                            <LI>
                                <font class=xuhao1>03</font>
                                <A href=/zx/show-49.htm>“她经济”会是下一个创业伪风.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>04</font>
                                <A href=/zx/show-48.htm>大学生电商创业还有多少机会？.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>05</font>
                                <A href=/zx/show-45.htm>解读90后关键词 新生的创业.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>06</font>
                                <A href=/zx/show-37.htm>那些辞职乱创业的人终于都消停.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>07</font>
                                <A href=/zx/show-36.htm>如何寻找创业新点子？这三个思.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>08</font>
                                <A href=/zx/show-23.htm>京东便利店否认“倒闭潮”，赔.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>09</font>
                                <A href=/zx/show-16.htm>艾灸加盟店排行榜</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>10</font>
                                <A href=/zx/show-11.htm>2018年宏观经济形势分析：.</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                <td style='width:20%;' valign="top">
                    <div class='titles'><span><a href='/zx/4'> 更多...</a></span>
                        <h3>市场行情</h3>
                    </div>
                    <div class='content2'>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="90px">
                                    <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                        <tr>
                                            <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                <A href="/zx/show-38.htm" target="_blank"><img data-original="./static/home/picture/20181029091648306_small.jpg" border="0" onload=resizeimg(90,90,this)></A>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style='padding-left:5px'>
                                    <A href="/zx/show-38.htm" target="_blank">
                                        <b>淘宝主播5小时直播卖.</b><br>凌晨4点，天还没有亮，路灯下的杭州街头凉风飕飕。连续奋战了16个小.</a>
                                </td>
                            </tr>
                            </tr>
                        </table>
                        <div class="boxxian"></div>
                        <ul>
                            <LI>
                                <font class=xuhao1>01</font>
                                <A href=/zx/show-59.htm>个人创业如何赚钱？现在做什么.</A>
                            </LI>
                            <LI>
                                <font class=xuhao1>02</font>
                                <A href=/zx/show-58.htm>同城配送机会所向，为何创业者.</A>
                            </LI>
                            <LI>
                                <font class=xuhao1>03</font>
                                <A href=/zx/show-57.htm>2018年即将爆发的四个赚钱.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>04</font>
                                <A href=/zx/show-56.htm>自主创业2018年加盟商机在哪儿</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>05</font>
                                <A href=/zx/show-55.htm>睡前场景创业，“睡不着”成就.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>06</font>
                                <A href=/zx/show-54.htm>这门针对“怒路族”的生意竟然.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>07</font>
                                <A href=/zx/show-53.htm>80万亿产业争夺战爆发！这可.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>08</font>
                                <A href=/zx/show-39.htm>天猫商城最新入驻费用是多少</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>09</font>
                                <A href=/zx/show-38.htm>淘宝主播5小时直播卖货700.</A>
                            </LI>
                            <LI>
                                <font class=xuhao2>10</font>
                                <A href=/zx/show-15.htm>开童车店需要多少钱</A>
                            </LI>
                        </ul>
                    </div>
                </td>
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
    <script type=text/javascript>
        $(function() {
            $("img").lazyload({
                placeholder: "/image/logo.png", //用图片提前占位//placeholder,值为某一图片路径.此图片用来占据将要加载的图片的位置,待图片加载时,占位图则会隐藏
                effect: "fadeIn", // 载入使用何种效果//effect(特效),值有show(直接显示),fadeIn(淡入),slideDown(下拉)等,常用fadeIn
                threshold: 0, // 提前开始加载//threshold,值为数字,代表页面高度.如设置为200,表示滚动条在离目标位置还有200的高度时就开始加载图片,可以做到不让用户察觉   
                failurelimit: 10 // 图片排序混乱时	 
            });
        });
    </script>
</body>

</html>