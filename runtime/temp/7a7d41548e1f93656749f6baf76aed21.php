<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"/var/www/zs/public/../application/index/view/project/list.html";i:1572258286;s:51:"/var/www/zs/application/index/view/common/head.html";i:1572244106;s:53:"/var/www/zs/application/index/view/common/header.html";i:1572243326;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570958938;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>项目列表</title>
    <meta name="keywords" content="太阳公公童装招商" />
    <meta name="description" content="太阳公公童装招商" />
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
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
            <div class="right">
                <div class="titles"><span>&nbsp;</span>
                    <h3>热门项目</h3>
                </div>
                <div class="content1">
                <ul>
                    <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
                    <li><span style="width:80px" title="阅832次">(<?php echo $h['views']; ?>)</span>
                        <font <?php if(($key==0 || $key==1 || $key==2)): ?>class="xuhao1" <?php endif; ?>><?php echo $key+1; ?> </font> <a href="/zx/show-38.htm">
                            <?php echo $h['name']; ?></a>
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
                        <font <?php if(($key==0 || $key==1 || $key==2)): ?>class="xuhao1" <?php endif; ?>><?php echo $key+1; ?> </font> <a href="/zx/show-38.htm">
                            <?php echo $h['name']; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>

            </div>

           

            <div class="left">
                <div class="station2">
                    <li class='start'><a href='/'>首页</a></li>
                    <li><a href='/zs/index.htm'>招商</a></li>
                    <li><a href='/zs/fuzhuangxiebao'>服装鞋包</a></li>
                </div>

                <div class="box">
                    <div class="boxbigclass">
                        <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo url('/project'); ?>/<?php echo $c['pid']; ?>/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <li id="more">显示更多...</li>
                    </div>
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
                                                    <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>"><img data-original="<?php echo $p['image']; ?>" onload="resizeimg(120,120,this)"></a>
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