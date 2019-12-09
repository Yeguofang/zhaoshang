<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\Project\zhaoshang\public/../application/index/view/article/index.html";i:1574936917;s:62:"D:\Project\zhaoshang\application\index\view\common\header.html";i:1574148679;s:62:"D:\Project\zhaoshang\application\index\view\common\footer.html";i:1575796502;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $tdk[1]->title; ?></title>
    <meta content="<?php echo $tdk[1]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[1]->keyword; ?>" name="keywords" />
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
    <link href="/static/home/css/jdimg.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/static/home/js/jquery.js"></script>
    <script type="text/javascript" src="/static/home/js/jdimg.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.focus("#focus001");
            $.focus("#focus002");
        });
    </script>
    <style type="text/css">
        .focus {
            width: 300px;
            height: 315px;
        }

        .focus img {
            border: 0;
            width: 300px;
            height: 315px;
        }

        .focus ul li {
            width: 300px;
            height: 315px;
        }

        .focus .btnBg {
            display: block;
        }

        .focus .btnBg {
            width: 300px;
        }

        .focus .btn {
            width: 300px;
        }
    </style>
</head>

<body>
    <script language="JavaScript" src="/static/home/js/qt.js"></script>
    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-09 12:00:21
 * @LastEditTime: 2019-11-19 15:31:19
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

<div class="nav2">
    <div class="main">
        <ul>
            <li class="current"><a>创业好项目</a></li>
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
        <div class="pagebody">
            <div class="left">
                <div>
                    <ul>
                        <li id="leftleft">
                            <div class="focus" id="focus001">
                                <ul>
                                    <?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <A href="<?php echo url('/article_detail'); ?>/<?php echo $s['category_id']; ?>/<?php echo $s['id']; ?>"
                                            target="_blank"><img src="<?php echo $s['image']; ?>" style="width: 100%;" /></A>
                                        <div class="divtitle"><?php echo $s['title']; ?></div>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </li>
                        <li id="leftright">

                            <div class="boxtop3">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td>
                                            <div class="bigbigword2 center">
                                                <A href="<?php echo url('/article_detail'); ?>/<?php echo $h['category_id']; ?>/<?php echo $h['id']; ?>"
                                                    target="_blank"><?php echo $h['title']; ?></a>
                                            </div>
                                            <div style="padding-bottom:10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_substr($h['desc'],0,100); ?></div>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">

                <div class="titles4">推荐资讯</div>
                <div class="content1">
                    <ul>
                        <?php if(is_array($recommend) || $recommend instanceof \think\Collection || $recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
                        <LI><span style='width:50px' title="阅832次">(832)</span>
                            <font <?php if(($key==0 ||$key==1 ||$key==2)): ?> class=xuhao1 <?php else: ?>class=xuhao2<?php endif; ?>><?php echo $key+1; ?>
                                </font> <A href="<?php echo url('/article_detail'); ?>/<?php echo $r['category_id']; ?>/<?php echo $r['id']; ?>">
                                <?php echo mb_substr($r['title'],0,13); ?></A>
                        </LI>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div>
        </div>



        <div class='titles'>
            <span></span>图片资讯
        </div>
        <ul>
            <?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?>
            <li style='width:49.5%;float: left;' valign="top">
                <div class='content2'>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="90px">
                                <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                    <tr>
                                        <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                            <a href="<?php echo url('/article_detail'); ?>/<?php echo $i['category_id']; ?>/<?php echo $i['id']; ?>"
                                                target="_blank">
                                                <img src="<?php echo $i['image']; ?>" width="150px" height="110px">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style='padding-left:5px'>
                                <a href="<?php echo url('/article_detail'); ?>/<?php echo $i['category_id']; ?>/<?php echo $i['id']; ?>" target="_blank">
                                    <b><?php echo mb_substr($i['title'],0,25); ?></b><br>
                                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo mb_substr($i['desc'],0,100); ?>...<a href="<?php echo url('/article_detail'); ?>/<?php echo $i['category_id']; ?>/<?php echo $i['id']; ?>">[查看...]</a>
                                <span style="float: right;"><?php echo date('Y-m-d',$i['createtime']); ?></span>
                            </td>
                        </tr>

                    </table>
                    <div class="boxxian"></div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>





        <div class="bordercccccc">
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <?php if(is_array($home) || $home instanceof \think\Collection || $home instanceof \think\Paginator): $i = 0; $__LIST__ = $home;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;if(($key%3 == 0)): ?> <tr><?php endif; ?>
                    <td style='width:33%;' valign="top">
                        <div class='titles'><span><a href="<?php echo url('/article_list'); ?>/<?php echo $h['id']; ?>"> 更多...</a></span><?php echo $h['name']; ?></div>
                        <div class='content2'>

                               

                            <ul>
                                <?php if(is_array($h['content']) || $h['content'] instanceof \think\Collection || $h['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $h['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;if(($key == 0)): ?>
                                <table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td height="90px">
                                                <table border="0" cellspacing="1" cellpadding="0" class="bgcolor2">
                                                    <tr>
                                                        <td bgcolor="#FFFFFF" align="center" height="90px" width="100px">
                                                            <a href="<?php echo url('/article_detail'); ?>/<?php echo $c['category_id']; ?>/<?php echo $c['id']; ?>"
                                                                target="_blank">
                                                                <img src="<?php echo $c['image']; ?>" width="100px" height="80px">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td style='padding-left:5px'>
                                                <a href="<?php echo url('/article_detail'); ?>/<?php echo $c['category_id']; ?>/<?php echo $c['id']; ?>" target="_blank">
                                                    <b><?php echo $c['title']; ?></b><br>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="boxxian"></div>
                                    <?php else: ?>
                                    <LI>
                                        <font <?php if(($key==0 ||$key==1 ||$key==2)): ?> class=xuhao1  <?php else: ?>class=xuhao2<?php endif; ?>><?php echo $key+1; ?> </font> 
                                            <A href="<?php echo url('/article_detail'); ?>/<?php echo $c['category_id']; ?>/<?php echo $c['id']; ?>"> <?php echo mb_substr($c['title'],0,16); ?>
                                            <span style="float: right;"><?php echo date('Y-m-d',$c['createtime']); ?></span>
                                        </A>
                                    </LI>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </td>
                    <?php if(($key%3 == 2)): ?></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>





        <div class="box" style="margin-top:8px">
            声明：本站部分图文内容取自互联网。您若发现有侵犯您著作权行为，请及时告知，我们将在第一时间删除侵权作品、停止继续传播。
        </div>
    </div>


    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-07 18:30:41
 * @LastEditTime: 2019-12-08 17:15:02
 -->
<div style="height:10px;clear:both;"></div>
<div id="dlstepbox">
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
        <?php echo $web['web_avow']; ?>
        <div class="bottominner">
            <div class="bottomlink">
                <a href="/about">关于我们</a>|
                <a href="/mzsm">免责申明</a>|
                <a href="/tssc">投诉删除</a>|
                <a href="<?php echo url('/help'); ?>">帮助信息</a>|
                <a href="<?php echo url('/link'); ?>">友情链接</a>
               </div>
            <a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo $web['web_icp']; ?></a> 
            <img src="/static/home/images/ghs.png"><a href="http://www.beian.gov.cn/portal/index.do"
                target="_blank"><?php echo $web['web_beian']; ?></a> <br />
             
                <?php echo $web['web_copyright']; ?>
        </div>
    </div>
</div>
<!--返回顶部-->
<script src="/static/home/js/scrolltop.js" type="text/javascript" language="JavaScript"></script>

            <div style="display: none" id="goTopBtn"></div>
</body>

</html>