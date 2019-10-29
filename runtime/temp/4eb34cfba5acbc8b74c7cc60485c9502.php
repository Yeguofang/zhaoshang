<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"/var/www/zs/public/../application/index/view/article/detail.html";i:1572343693;s:51:"/var/www/zs/application/index/view/common/head.html";i:1572244106;s:53:"/var/www/zs/application/index/view/common/header.html";i:1572342302;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570958938;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>顾客进店后，你可千万不要这么说！资讯</title>
    <meta name="keywords" content="顾客进店后，你可千万不要这么说！资讯" />
    <meta name="description" content="资讯" />
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
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
    <script language="JavaScript" src="/static/home/js/qt.js"></script>

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
                    <a href="/"><img src="<?php echo $web['web_logo']; ?>" border="0" alt="<?php echo $web['web_name']; ?>"></a>
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
        <div class="station">
            <h3>
                    <li class='start'><a href="/">首页</a></li>
                    <li><a href="<?php echo url('/article'); ?>">资讯</a></li>
                    <li><?php echo $data['name']; ?></li>
                <li>
                    <a href='/zx/5/0'></a>
                </li>
            </h3>
        </div>
        <div class="pagebody">
            <div class="left">
                <div class="box">
                    <div id="BoxInfoTitle"><?php echo $data['title']; ?></div>
                    <div id="BoxInfoTitleNext">
                        来源：&nbsp;&nbsp;发布日期：2018-10-29&nbsp;&nbsp;发布者：&nbsp;&nbsp;共阅254次  字体：<a href='javascript:fontZoom(22)'>大</a> <a href='javascript:fontZoom(14)'>中</a> <a href='javascript:fontZoom(12)'>小</a>
                    </div>
                    <div id="fontzoom">
                        <?php echo $data['content']; ?>
                    </div>

                    <div style="text-align:center;padding:10px;">
                        <a href="http://www.jiathis.com/share/" class="jiathis" target="_blank">[分享到...]</a>
                        <script type="text/javascript" src="/static/home/js/jia.js" charset="utf-8"></script>
                        <a href="javascript:printcontent()" target="_self">
          [打印本文]</a> <a href='#top'>[返回顶部]</a>
                        <a href="javascript:window.close()">
          [关闭该页]</a>
                    </div>
                </div>

                <div class="box">
                    <?php if(($prv == null)): ?>
                    上一篇文章：没有了<br/> 
                    <?php else: ?>
                    上一篇文章：<a href="<?php echo url('/article_detail'); ?>/<?php echo $prv['category_id']; ?>/<?php echo $prv['id']; ?>"><?php echo $prv['title']; ?></a><br/> 
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
               
                    <div class="titles"><span>&nbsp;</span>
                        <h3>热门项目</h3>
                    </div>
                    <div class="content1">
                    <ul>
                        <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
                        <li><span style="width:80px" title="阅832次">(<?php echo $h['views']; ?>)</span>
                            <font <?php if(($key==0 || $key==1 || $key==2)): ?>class="xuhao1"  <?php else: ?> class="xuhao2"<?php endif; ?>><?php echo $key+1; ?> </font> <a href="<?php echo url('/article_detail'); ?>/<?php echo $h['category_id']; ?>/<?php echo $h['id']; ?>">
                                <?php echo mb_substr($h['title'],0,10); ?>...</a>
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
                            <font <?php if(($key==0 || $key==1 || $key==2)): ?>class="xuhao1" <?php else: ?> class="xuhao2" <?php endif; ?>><?php echo $key+1; ?> </font> <a href="<?php echo url('/article_detail'); ?>/<?php echo $h['category_id']; ?>/<?php echo $h['id']; ?>">
                                <?php echo mb_substr($h['title'],0,10); ?>...</a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    </div>
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
                                                    <A href="/zx/show-92.htm" target="_blank"><img data-original="/static/home/picture/20190906085558520_small.png" border="0" onload=resizeimg(90,90,this)></A>
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
                                                <A href="/zx/show-32.htm" target="_blank"><img data-original="/static/home/picture/20181029090551730_small.jpg" border="0" onload=resizeimg(90,90,this)></A>
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
                                                <A href="/zx/show-36.htm" target="_blank"><img data-original="/static/home/picture/20181029091205771_small.jpg" border="0" onload=resizeimg(90,90,this)></A>
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
                                                <A href="/zx/show-38.htm" target="_blank"><img data-original="/static/home/picture/20181029091648306_small.jpg" border="0" onload=resizeimg(90,90,this)></A>
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