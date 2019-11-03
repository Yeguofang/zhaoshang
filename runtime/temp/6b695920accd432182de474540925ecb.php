<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"/var/www/zs/public/../application/index/view/index/index.html";i:1572597533;s:51:"/var/www/zs/application/index/view/common/head.html";i:1572244106;s:53:"/var/www/zs/application/index/view/common/header.html";i:1572676786;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1572419587;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $tdk->title; ?></title>
    <meta property="qc:admins" content="31307116006112006375" />
    <meta content="<?php echo $tdk->description; ?>" name="description" />
    <meta content="<?php echo $tdk->keyword; ?>" name="keywords" />
    <link rel="Bookmark" href="favicon.ico" />
    <link rel="Shortcut Icon" href="favicon.ico" /> <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
</head>
<style>
.content_index>.tabel>ul{
    display: flex;
    flex-wrap: wrap;
}
/* .content_index>.tabel>ul>li>a{
    border:1px solid #bebdbd;
    width: 30%;
    margin-left: 2%;
    margin-top: 2%;
    margin-bottom: 4%;
    height: 88px;
} */
.content_index>.tabel>ul>li>a>img{
    border:1px solid #bebdbd;
    margin-left: 5px;
    margin-top: 5px;
    width: 120px;
    transition: all 0.5s;  
}
.lazy:hover{
    transform: scale(1.5);
    border:5px solid #6d6a6a;
}

.content_index>.tabel>ul>li>p{
    height: 20px;
    padding-top: 2px;
    font-size: 14px;
    text-align:center;
}

</style>
<body>

    <script type="text/javascript">
        $(function() {
            $("#nav").addClass("nav");
            $("#nav").removeClass("nav2");
        });
    </script>

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
                    <form action="<?php echo url('/search'); ?>" method="post">
                        <div id="divselect">
                            <select name="type" style="width: 60px;height: 40px;background-color: #fff;font-size: 16px;">
                                <option value="project">招 商</option>
                                <option value="article">资 讯</option>
                            </select>
                        </div>
                        <!-- <input name="kind" type="hidden" value="zs" id="inputselect" /> -->
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

    <!--焦点广告效果JS-->
    <script src="/static/home/js/slider.js" type="text/javascript" language="JavaScript"></script>
    <!--顶部广告效果-->
    <script type="text/javascript">
        $(function() {
            $("#banner").slideDown();
            $("#banner span").click(function() {
                $("#banner").slideUp();
            });
        });
    </script>
    <div class="main">
        <div class="pagebody">
            <div class="left" style="width: 960px;">
                <ul>
                <!-- 项目分类 -->
                    <li style="float:left;width:200px;">
                        <div id="flzs">
                            <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
                            <div class='zsclass' onMouseOver="showfilter2(zsLayer<?php echo $m['id']; ?>)" onMouseOut="showfilter2(zsLayer<?php echo $m['id']; ?>)">
                                <label>
                                    <h2>
                                        <img src=<?php echo $m['image']; ?>>&nbsp;
                                        <a href="<?php echo url('/project'); ?>/<?php echo $m['id']; ?>"><?php echo $m['name']; ?> </a> <span>(共 <b><?php echo $m['sum']; ?></b> 条)</span>
                                    </h2>
                                    <div id="zsLayer<?php echo $m['id']; ?>" class='zsclass_s'>
                                        <div class='bigbigword ico_size'>
                                            <img src=<?php echo $m['image']; ?>>&nbsp;<?php echo $m['name']; ?>
                                        </div>
                                        <?php if(is_array($m['nav']) || $m['nav'] instanceof \think\Collection || $m['nav'] instanceof \think\Paginator): $i = 0; $__LIST__ = $m['nav'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?>
                                        <div class='zsclass_s_li'>
                                            <div class='zsclass_s_name'>
                                                <a href="<?php echo url('/project'); ?>/<?php echo $n['pid']; ?>/<?php echo $n['id']; ?>"><?php echo $n['name']; ?> </a> 
                                            </div> 
                                            <div class='zsclass_cp'>
                                                <?php if(is_array($n['project']) || $n['project'] instanceof \think\Collection || $n['project'] instanceof \think\Paginator): $i = 0; $__LIST__ = $n['project'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                                                    <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" target='_blank'><?php echo $p['name']; ?></a>&nbsp;
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </label>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </li>
            <!-- 项目分类结束 -->
            
                    <li style="float:left">
                        <div>
                            <style type="text/css">
                                .flexslider {
                                    width: 750px;
                                    height: 330px
                                }
            
                                .flexslider img {
                                    width: 750px;
                                    height: 330px
                                }
                            </style>
                            <div id="demo01" class="flexslider">
                                <ul class="slides">
                                    <?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <div>
                                            <a href="javascript:void(0)"><img src="<?php echo $s['image']; ?>"
                                                    alt="" /></a>
                                        </div>
                                        <div><?php echo $s['name']; ?></div>
                                    </li>
                                   <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <script type="text/javascript">
                                $(function () {

                                    $('#demo01').flexslider({
                                        animation: "slide",
                                        direction: "horizontal",
                                        //direction:"vertical",
                                        easing: "swing"
                                    });

                                    $('#demo02').flexslider({
                                        animation: "slide",
                                        direction: "vertical",
                                        easing: "swing"
                                    });

                                });
                            </script>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="right" style="width:240px;">
                <div class="bordercccccc">
                    <div style="padding:10px">
                        <strong>免费注册为会员后，您可以</strong><br /> 建企业商铺  发供求信息  推广产品
                    </div>
                    <div class="boxreg">
                        <ul>
                            <li><a id="reg" href="reg/userreg.htm">免费注册</a></li>
                            <li><a id="login" href="user/login.htm">登录</a></li>
                        </ul>
                    </div>
                    <div id="sitecount">
                        <li>用户<span><?php echo $user_count; ?></span></li>
                        <li>招商<span><?php echo $project_count; ?></span></li>
                        <li>代理<span>64</span></li>
                        <li>资讯<span><?php echo $article_count; ?></span></li>
                    </div>
                </div>

                <div class="titles_small">
                    <h3>常见问题解答</h3>
                </div>
                <div class="content1">
                    <script language="javascript">
                        $(function() {
                            //多行应用@Mr.Think
                            var _wrap = $('ul.mulitline'); //定义滚动区域
                            var _interval = 2000; //定义滚动间隙时间
                            var _moving; //需要清除的动画
                            _wrap.hover(function() {
                                clearInterval(_moving); //当鼠标在滚动区域中时,停止滚动
                            }, function() {
                                _moving = setInterval(function() {
                                        var _field = _wrap.find('li:first'); //此变量不可放置于函数起始处，li:first取值是变化的
                                        var _h = _field.height(); //取得每次滚动高度
                                        _field.animate({
                                            marginTop: -_h + 'px'
                                        }, 600, function() { //通过取负margin值，隐藏第一行
                                            _field.css('marginTop', 0).appendTo(_wrap); //隐藏后，将该行的margin值置零，并插入到最后，实现无缝滚动
                                        })
                                    }, _interval) //滚动间隔时间取决于_interval
                            }).trigger('mouseleave'); //函数载入时，模拟执行mouseleave，即自动滚动
                        });
                    </script>
                    <ul class="mulitline" style="overflow:hidden;height:100px">
                        <?php if(is_array($help) || $help instanceof \think\Collection || $help instanceof \think\Paginator): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <LI>【帮助】
                            <a target="_bank" href="<?php echo url('/help'); ?>#<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a> </LI>
                        <LI>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>


    <!-- 图片链接 -->
    <div class="titles">
            <span>
                <?php if(is_array($advert_d['text']) || $advert_d['text'] instanceof \think\Collection || $advert_d['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_d['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $d['url']; ?>" target="_blank" ><?php echo $d['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span> 
            图片链接</div>
        <div class="content">
            <table width='100%' border='0' cellpadding='2' cellspacing='1' class='bgcolor2'>
                <tr>
                    <td width=25% bgcolor=#FFFFFF>
                        <?php if(is_array($advert_d['image']) || $advert_d['image'] instanceof \think\Collection || $advert_d['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_d['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $d['url']; ?>" target='_blank'><img src="<?php echo $d['image']; ?>" alt="<?php echo $d['title']; ?>" width=144 height=70 border=0 /></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
            </table>
        </div>
         <!-- 图片链接 -->

        <!-- 推荐项目开始 -->
        <div class="pagebody">
            <div>
                <?php foreach($index as $key=>$v): ?>
                <div class="boxrow<?php echo $key+1; ?>">
                    <div class='titlebigs titlebig<?php echo $key+1; ?>'>
                        <h3>
                            <a href="<?php echo url('/project'); ?>/<?php echo $v['id']; ?>"><?php echo $v['name']; ?> </a>
                         </h3> 
                            <span>
                                <?php foreach($v['nav'] as $n): ?>
                                <li><a href="<?php echo url('/project'); ?>/<?php echo $n['pid']; ?>/<?php echo $n['id']; ?>"><?php echo $n['name']; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </span>
                    </div>

                    <div class="content_index">
                      <div class="tabel">
                        <ul>
                            <?php foreach($v['project'] as $p): ?>
                            <li>
                                <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" target="_bank">
                                    <img class="lazy" src="<?php echo $p['image']; ?>" style="width: 120px;height:90px;"/>
                                </a>
                                <p><?php echo $p['name']; ?></p>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
<!-- 推荐项目结束 -->



        <!-- 文章咨询－１ -->
        <div class="bordercccccc" style="margin-bottom:10px">
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                    <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($article) ? array_slice($article,0,4, true) : $article->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                      
                    <td style='width:20%;' valign="top">
                        <div class='titles'><span><a href="<?php echo url('/article_list'); ?>/<?php echo $vo['id']; ?>"> 更多...</a></span>
                            <h3><?php echo $vo['name']; ?></h3>
                        </div>
                        <div class='content2'>
                            <?php foreach($vo['content'] as $key=>$a): if($key == '0'): ?>
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="90px">
                                        <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                            <tr>
                                                <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                    <a href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>" target="_blank">
                                                        <img src="<?php echo $a['image']; ?>" width="120px" height="80px">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style='padding-left:5px'>
                                        <a href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>" target="_blank">
                                            <b><?php echo $a['title']; ?></b><br>
                                        </a>
                                    </td>
                                </tr>
                    
                            </table>
                            <div class="boxxian"></div>
                            <?php endif; ?>

                            <ul>
                                <LI>
                                        <font <?php if(($key == 0 ||$key ==1 ||$key ==2)): ?> class=xuhao1 <?php else: ?>class=xuhao2<?php endif; ?>><?php echo $key+1; ?></font>
                                        <a href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>"><?php echo mb_substr($a['title'],0,17); ?> </a> 
                                </LI> 
                            </ul> 
                            <?php endforeach; ?>
                        </div> 
                    </td>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
            </table>
        </div>
        <!-- 文章咨询－１ -->

        


        <!-- 图文广告－Ａ区 -->
        <div class="titles">
            <span>
                <?php if(is_array($advert_a['text']) || $advert_a['text'] instanceof \think\Collection || $advert_a['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_a['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $a['url']; ?>" target="_blank" ><?php echo $a['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span>
            <h3>火爆招商a区</h3>
        </div>
        <div class="pagebody">
            <div class="adStyle1">
                <ul>
                    <?php if(is_array($advert_a['image']) || $advert_a['image'] instanceof \think\Collection || $advert_a['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_a['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a  href="<?php echo $a['url']; ?>" target="_blank" style="text-align: center;">
                            <img data-original="<?php echo $a['image']; ?>" alt="<?php echo $a['title']; ?>" src="<?php echo $a['image']; ?>" style="display: inline;">
                            <?php echo $a['title']; ?>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
         <!-- 图文广告－Ａ区 -->



          <!-- 图文广告－B区 -->
        <div class="titles">
            <span>
                <?php if(is_array($advert_b['text']) || $advert_b['text'] instanceof \think\Collection || $advert_b['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_b['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $b['url']; ?>" target="_blank" ><?php echo $b['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span>
            <h3>火爆招商B区</h3>
        </div>
        
        <div class="adStyle2">
            <ul>
                <?php if(is_array($advert_b['image']) || $advert_b['image'] instanceof \think\Collection || $advert_b['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_b['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
                <li>
                    <a  href="<?php echo $b['url']; ?>" target="_blank" style="text-align: center;">
                        <img data-original="<?php echo $b['image']; ?>" alt="<?php echo $b['title']; ?>" src="<?php echo $b['image']; ?>" style="display: inline;">
                        <?php echo $b['title']; ?>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!-- 图文广告－B区 -->


         <!-- 图文广告－C区 -->
        <div class="titles">
            <span>
                <?php if(is_array($advert_c['image']) || $advert_c['image'] instanceof \think\Collection || $advert_c['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_c['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $c['url']; ?>" target="_blank" ><?php echo $c['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span>
            <h3>火爆招商C区</h3>
        </div>
        <div class="adStyle3">
            <ul>
                <?php if(is_array($advert_c['image']) || $advert_c['image'] instanceof \think\Collection || $advert_c['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_c['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo $c['url']; ?>" target="_blank" >
                        <img data-original="<?php echo $c['image']; ?>" alt="<?php echo $c['title']; ?>" src="<?php echo $c['image']; ?>" style="display: block;">
                      
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
         <!-- 图文广告－C区 -->
        

        <!-- 文章咨询－2 -->
        <div class="bordercccccc" style="margin-bottom:10px">
                <table width="100%" border="0" cellspacing="10" cellpadding="0">
                    <tr>
                        <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($article) ? array_slice($article,4,4, true) : $article->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                          
                        <td style='width:20%;' valign="top">
                            <div class='titles'><span><a href="<?php echo url('/article_list'); ?>/<?php echo $vo['id']; ?>"> 更多...</a></span>
                                <h3><?php echo $vo['name']; ?></h3>
                            </div>
                            <div class='content2'>
                                <?php foreach($vo['content'] as $key=>$a): if($key == '0'): ?>
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="90px">
                                            <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                                <tr>
                                                    <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                        <a href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>" target="_blank">
                                                            <img src="<?php echo $a['image']; ?>" width="150px" height="110px">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style='padding-left:5px'>
                                            <a href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>" target="_blank">
                                                <b><?php echo $a['title']; ?></b><br>
                                            </a>
                                        </td>
                                    </tr>
                        
                                </table>
                                <div class="boxxian"></div>
                                <?php endif; ?>
    
                                <ul>
                                    <LI>
                                        <font <?php if(($key == 0 ||$key ==1 ||$key ==2)): ?> class=xuhao1 <?php else: ?>class=xuhao2<?php endif; ?>><?php echo $key+1; ?></font>
                                        <a href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>"><?php echo mb_substr($a['title'],0,15); ?>... </a> 
                                    </LI> 
                                </ul> 
                                <?php endforeach; ?>
                            </div> 
                        </td>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tr>
                </table>
            </div>
            <!-- 文章咨询－2 -->
    
    


        <div class="pagebody">
            <!--    创业项目导航 -->
            <div class="left">
                <div class="titles">
                    创业项目导航
                </div>
                <div class="flzs_zhankai">

                    <?php if(is_array($navs) || $navs instanceof \think\Collection || $navs instanceof \think\Paginator): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?>
                    <div class='zsclass_zhankai'>
                        <div class='zsclass_s_zhankai_style2'>
                            <h2><img src=/static/home/picture/1.png>&nbsp;
                                <a href="<?php echo url('/project'); ?>/<?php echo $n['id']; ?>"><?php echo $n['name']; ?>
                                                                                                                                                                                                                                                                                                                                                                                                        </a>
                            </h2>

                            <?php if(is_array($n['nav']) || $n['nav'] instanceof \think\Collection || $n['nav'] instanceof \think\Paginator): $i = 0; $__LIST__ = $n['nav'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
                            <div class='zsclass_s_li'>
                                <div class='zsclass_s_name'>
                                    <a href="<?php echo url('/project'); ?>/<?php echo $t['pid']; ?>/<?php echo $t['id']; ?>"><?php echo $t['name']; ?>
                                                                                                                                                                                                                                                                                                                                                                                                            </a>
                                </div>
                                <div class='zsclass_cp'>
                                    <?php if(is_array($t['project']) || $t['project'] instanceof \think\Collection || $t['project'] instanceof \think\Paginator): $i = 0; $__LIST__ = $t['project'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                                    <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" target='_blank'><?php echo $p['name']; ?></a>&nbsp;
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                </div>
            </div>
            <!-- 创业项目导航 -->



            <!-- 最新加盟信息 -->
            <div class="right">
                <div class="titles">
                    <h3>最新加盟信息</h3>
                </div>
                <div class="content1">
                    <script language="javascript">
                        $(function() {
                            //多行应用@Mr.Think
                            var _wrap = $('ul.dl'); //定义滚动区域
                            var _interval = 2000; //定义滚动间隙时间
                            var _moving; //需要清除的动画
                            _wrap.hover(function() {
                                clearInterval(_moving); //当鼠标在滚动区域中时,停止滚动
                            }, function() {
                                _moving = setInterval(function() {
                                        var _field = _wrap.find('li:first'); //此变量不可放置于函数起始处，li:first取值是变化的
                                        var _h = _field.height(); //取得每次滚动高度
                                        _field.animate({
                                            marginTop: -_h + 'px'
                                        }, 600, function() { //通过取负margin值，隐藏第一行
                                            _field.css('marginTop', 0).appendTo(_wrap); //隐藏后，将该行的margin值置零，并插入到最后，实现无缝滚动
                                        })
                                    }, _interval) //滚动间隔时间取决于_interval
                            }).trigger('mouseleave'); //函数载入时，模拟执行mouseleave，即自动滚动
                        });
                    </script>
                    <ul class="dl" style="overflow:hidden;height:585px">

                        <li>
                            <table width="100%" border="0" cellpadding="5" cellspacing="0">
                                <tr>
                                    <td class="x_bottom">
                                        <table width="62" height="62 " border="0" cellspacing="1" class="bgcolor3">
                                            <tr>
                                                <td class="bgcolor1"><img data-original='/static/home/picture/20180903134708562_small.gif' onload='resizeimg(60,60,this)'></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="x_bottom">
                                        手机为：138****4112 (李志阳)的用户,发布了代理需求<br />
                                        <a href="/zt/show-1.htm"><b>河南大禹有限公司</b></a>
                                    </td>
                                </tr>
                            </table>
                        </li>


                    </ul>
                </div>
            </div>
            <!-- 最新加盟信息 -->
        </div>



        
        <!-- 图片链接 -->
        <div class="titles">
            <span>
                <?php if(is_array($advert_d['text']) || $advert_d['text'] instanceof \think\Collection || $advert_d['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_d['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $d['url']; ?>" target="_blank" ><?php echo $d['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span> 
            图片链接</div>
        <div class="content">
            <table width='100%' border='0' cellpadding='2' cellspacing='1' class='bgcolor2'>
                <tr>
                    <td width=25% bgcolor=#FFFFFF>
                        <?php if(is_array($advert_d['image']) || $advert_d['image'] instanceof \think\Collection || $advert_d['image'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_d['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $d['url']; ?>" target='_blank'>
                            <img src="<?php echo $d['image']; ?>" alt="<?php echo $d['title']; ?>" width=144 height=70 border=0 />
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
            </table>
        </div>
         <!-- 图片链接 -->
        

         <!-- 文字链接 -->
        <div class="titles">
            <span>
                <?php if(is_array($advert_e['text']) || $advert_e['text'] instanceof \think\Collection || $advert_e['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_e['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $e['url']; ?>" target="_blank" ><?php echo $e['title']; ?></a>|
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="<?php echo url('/link'); ?>">更多...</a>
            </span> 
            <h3>文字链接</h3>
        </div>
        <div class="content1">
            <table width='100%' border='0' cellpadding='2' cellspacing='1' class='bgcolor2'>
                <tr>
                    <?php if(is_array($advert_e['text']) || $advert_e['text'] instanceof \think\Collection || $advert_e['text'] instanceof \think\Paginator): $i = 0; $__LIST__ = $advert_e['text'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>
                    <td bgcolor='#FFFFFF'>
                        <a href="<?php echo $e['url']; ?>" target='_blank'><?php echo $e['title']; ?></a>
                    </td>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
            </table>
        </div>
        <!-- 文字链接 -->
        
        <!-- 客服中心 -->
        <div class="titles"><span></span>
            <h3> 客服中心</h3>
        </div>
        <div id="kefu">
            <div id="kefu_content">
                <ul>
                    <li>
                        李志阳 手机：17746959588 QQ：357856668
                        <a href="http://wpa.qq.com/msgrd?v=1&amp;uin=357856668&amp;&amp;Menu=yes" target="blank"><img alt="在线客服QQ" border="0" src="/static/home/picture/c2422770bc7e4ad492f0209b171abb24.gif" /> </a>
                    </li>
                </ul>
            </div>
            <br />
        </div>
        <!-- 客服中心 -->
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
<script src="/static/home/js/scrolltop.js" type="text/javascript" language="JavaScript"></script>

<div style="display: none" id="goTopBtn">
</DIV>
 
</body>

</html>