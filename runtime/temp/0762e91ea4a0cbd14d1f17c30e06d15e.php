<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/var/www/zs/public/../application/index/view/project/index.html";i:1572236958;s:53:"/var/www/zs/application/index/view/common/header.html";i:1572236251;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570958938;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>服装鞋包</title>
    <meta content="服装鞋包" name="description" />
    <meta content="服装鞋包" name="keywords" />
    <link href="./static/home/css/style.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" src="./static/home/js/jquery.js"></script>
    <script src="./static/home/js/jquery.lazyload.js"></script>
    <script type="text/javascript">
        var CRT = 6; // 如果大于等于3
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
            <div class="right">
                <div class="titles"><span>&nbsp;</span>
                    <h3>查看过的</h3>
                </div>
                <div class="content1">暂无记录</div>
            </div>

            <div class="left">
                <div class="station2">
                    <li class='start'><a href='/'>首页</a></li>
                    <li><a href='/zs/index.htm'>招商</a></li>
                    <li><a href='/zs/fuzhuangxiebao'>服装鞋包</a></li>
                </div>

                <div class="box">
                    <div class="boxbigclass">

                        <li><a href='/zs/fuzhuangxiebao/nvzhuang'>女装</a></li>
                   
                        <li id="more">显示更多...</li>
                    </div>
                </div>

                <div class="left_content">
                    <div style="text-align:right;">
                        <form name="form1" method="get" action="/zs/zs_list.php">
                            <select name="province" id="province"></select>
                            <select name="city" id="city"></select>
                            <select name="xiancheng" id="xiancheng"></select>
                            <script src="./static/home/js/area.js"></script>
                            <script type="text/javascript">
                                new PCAS('province', 'city', 'xiancheng', '', '', '');
                            </script>


                            &nbsp;<select name='sj'><option value=999>不限时间</option><option value=1 >当天</option><option value=3 >3天内</option><option value=7 >7天内</option><option value=30 >30天内</option><option value=90 >90天内</option></select>&nbsp;<input
                                name='tp' type='checkbox' id='tp' value='yes' />有图&nbsp;<input name=vip type=checkbox id=vip value=yes />VIP&nbsp;
                            <input type=submit value="筛选" /><input name="b" type="hidden" value="fuzhuangxiebao" />
                            <input name="s" type="hidden" value="" /><select name='menu2' onChange=MM_jumpMenu( 'parent',this,0)><option value=/zs/zs_list.php?b=fuzhuangxiebao&s=&px=id >最近发布</option><option value='/zs/zs_list.php?b=fuzhuangxiebao&s=&px=sendtime' selected>最近更新</option><option value='/zs/zs_list.php?b=fuzhuangxiebao&s=&px=hit'>最热点击</option></select>&nbsp;
                            <select name='menu1' onchange=MM_jumpMenu( 'parent',this,0)>
                                <option value='/zs/zs.php?b=fuzhuangxiebao&s=&page=1&page_size=20' selected>20条/页</option>
                                <option value='/zs/zs.php?b=fuzhuangxiebao&s=&page=1&page_size=50'>50条/页</option>
                                <option value='/zs/zs.php?b=fuzhuangxiebao&s=&page=1&page=1&page_size=100'>100条/页</option>
                                </select>&nbsp;
                            <a href='/zs/zs.php?b=fuzhuangxiebao&s=&page=1&ys=list'><img src='./static/home/picture/showlist.gif' border='0' title='图文显示' style='filter:gray' /></a>
                            <a href='/zs/zs.php?b=fuzhuangxiebao&s=&page=1&ys=window'><img src='./static/home/picture/showwindow.gif' border='0' title='橱窗显示' /></a>
                        </form>
                    </div>

                    <form action='/zs/contrast.php' method='post' name='form2' target='_blank'>
                        <div style='padding:5px 10px 15px 5px;margin-top:-30px'>
                            <img src='./static/home/picture/ico-db.gif' width='14' height='16' style="margin-right:6px">
                            <input type='submit' name='Submit' value='对比选中的信息' onClick="return anyCheck(this.form,'duibi')">
                        </div>

                        <div class="content4">



                            <div id='Layer0' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='2' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer0);window.document.getElementById('Layer0').innerHTML='<img src=./static/home/picture/20180824203731559.jpg width=260>'" onMouseOut='showfilter(Layer0)'>
                                                    <a href='/zs/show-2.htm'><img data-original="./static/home/picture/20180824203731559_small.jpg" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-2.htm' class="bigbigword bold">太阳公公童装</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-
                                                    <br> 产品特点：太阳公公童装
                                                    <br> 投资额度：10-20万
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-2.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-2.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-2.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer1' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='47' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer1);window.document.getElementById('Layer1').innerHTML='<img src=./static/home/picture/20180901074051321.gif width=260>'" onMouseOut='showfilter(Layer1)'>
                                                    <a href='/zs/show-47.htm'><img data-original="./static/home/picture/20180901074051321_small.gif" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-47.htm' class="bigbigword bold">芮欧童装</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：芮欧童装
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-47.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-47.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-47.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer2' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='48' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer2);window.document.getElementById('Layer2').innerHTML='<img src=./static/home/picture/20180901074041729.jpg width=260>'" onMouseOut='showfilter(Layer2)'>
                                                    <a href='/zs/show-48.htm'><img data-original="./static/home/picture/20180901074041729_small.jpg" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-48.htm' class="bigbigword bold">土巴兔变色潮童服饰</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：土巴兔变色潮童服饰
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-48.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-48.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-48.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer3' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='49' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer3);window.document.getElementById('Layer3').innerHTML='<img src=./static/home/picture/20180901074031450.jpg width=260>'" onMouseOut='showfilter(Layer3)'>
                                                    <a href='/zs/show-49.htm'><img data-original="./static/home/picture/20180901074031450_small.jpg" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-49.htm' class="bigbigword bold">淘气娃童装</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：淘气娃童装
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-49.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-49.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-49.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer4' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='50' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer4);window.document.getElementById('Layer4').innerHTML='<img src=./static/home/picture/20180901073933473.jpg width=260>'" onMouseOut='showfilter(Layer4)'>
                                                    <a href='/zs/show-50.htm'><img data-original="./static/home/picture/20180901073933473_small.jpg" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-50.htm' class="bigbigword bold">杰米杰妮</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：杰米杰妮
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-50.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-50.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-50.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer5' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='51' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer5);window.document.getElementById('Layer5').innerHTML='<img src=./static/home/picture/20180901073944872.jpg width=260>'" onMouseOut='showfilter(Layer5)'>
                                                    <a href='/zs/show-51.htm'><img data-original="./static/home/picture/20180901073944872_small.jpg" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-51.htm' class="bigbigword bold">巴克巴童装</a>(代理留言
                                                    <font color='#FF6600'><b>1</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：巴克巴童装
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-51.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-51.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-51.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer6' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='52' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer6);window.document.getElementById('Layer6').innerHTML='<img src=./static/home/picture/20180901073955633.jpg width=260>'" onMouseOut='showfilter(Layer6)'>
                                                    <a href='/zs/show-52.htm'><img data-original="./static/home/picture/20180901073955633_small.jpg" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-52.htm' class="bigbigword bold">梦回唐朝</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：梦回唐朝
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-52.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-52.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-52.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer7' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='53' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer7);window.document.getElementById('Layer7').innerHTML='<img src=./static/home/picture/20180901074006106.gif width=260>'" onMouseOut='showfilter(Layer7)'>
                                                    <a href='/zs/show-53.htm'><img data-original="./static/home/picture/20180901074006106_small.gif" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-53.htm' class="bigbigword bold">亲闺密语</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：亲闺密语
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-53.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-53.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-53.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer8' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='54' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer8);window.document.getElementById('Layer8').innerHTML='<img src=./static/home/picture/20180901074019483.gif width=260>'" onMouseOut='showfilter(Layer8)'>
                                                    <a href='/zs/show-54.htm'><img data-original="./static/home/picture/20180901074019483_small.gif" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-54.htm' class="bigbigword bold">佐纳利男装</a>(代理留言
                                                    <font color='#FF6600'><b>0</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：佐纳利男装
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-54.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-54.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-54.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                            <div id='Layer9' class='hiddiv'></div>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' class="zslist">
                                <tr onClick='setbgcolor(this)'>
                                    <td width='30' align='center'> <input name='id[]' type='checkbox' id='id' value='55' onClick="return anyCheck(this.form,'xuanzhe')"></td>
                                    <td width='150'>
                                        <table width='130' height='130' border='0' cellpadding='0' cellspacing='1' class='bordercccccc'>
                                            <tr>
                                                <td align='center' onMouseOver="showfilter(Layer9);window.document.getElementById('Layer9').innerHTML='<img src=./static/home/picture/20180901073921442.gif width=260>'" onMouseOut='showfilter(Layer9)'>
                                                    <a href='/zs/show-55.htm'><img data-original="./static/home/picture/20180901073921442_small.gif" onload="resizeimg(120,120,this)"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width='800'>
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td height='30'><a href='/zs/show-55.htm' class="bigbigword bold">玛娃服饰</a>(代理留言
                                                    <font color='#FF6600'><b>1</b></font>条)</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:10px'> 所在地区：河南-郑州市<br> 招商区域：全国-全国各地区-西城区
                                                    <br> 产品特点：玛娃服饰
                                                    <br> 投资额度：1万以下
                                                    <div class="zslist_button">
                                                        <li>
                                                            <div class="lxfs">
                                                                <a href='/zs/show-55.htm#contact' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="liuyan">
                                                                <a href='/zs/show-55.htm#dl_liuyan' target='_blank'></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shoucang">
                                                                <a href="javascript:void(0)" rel="sidebar" onClick="shoucang('http://3158.zzcms.net/zs/show-55.htm','{#proname}')"></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&MMenu=yes><img border='0' src='./static/home/picture/8dc52e0a4e0343308bf77d38d6e119bd.gif' alt='QQ交流'></a>
                                                        </li>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class='boxxian'></div>

                        </div>
                    </form>
                    <div style='clear:both'></div>
                    <div class='fenyei'>
                        <form name='formpage' action='/zs/zs.php' method='get' target='_self' onsubmit='return checkpage();'>
                            <a>
                                <nobr>共10</nobr>
                            </a><span>1</span>
                            <input name='page' type='text' maxlength='10' value='1' class='biaodan' style='width:40px;' /><input type='submit' name='submit' value='GO' class='button' /><input name='b' type='hidden' value='fuzhuangxiebao' /><input name='s'
                                type='hidden' value='' /></form>
                    </div>


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
    <script type=text/javascript>
        $(function() {
            $("img").lazyload({
                //placeholder : "/image/loading.gif", //用图片提前占位//placeholder,值为某一图片路径.此图片用来占据将要加载的图片的位置,待图片加载时,占位图则会隐藏
                effect: "fadeIn", // 载入使用何种效果//effect(特效),值有show(直接显示),fadeIn(淡入),slideDown(下拉)等,常用fadeIn
                threshold: 200 // 提前开始加载//threshold,值为数字,代表页面高度.如设置为200,表示滚动条在离目标位置还有200的高度时就开始加载图片,可以做到不让用户察觉   
            });
        });
    </script>
</body>

</html>