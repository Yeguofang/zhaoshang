<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/var/www/zs/public/../application/index/view/project/ranking.html";i:1570163061;s:53:"/var/www/zs/application/index/view/common/header.html";i:1570183502;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570163017;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>招商</title>
    <meta content="招商" name="description" />
    <meta content="招商" name="keywords" />
    <link href="./static/home/css/style.css" rel="stylesheet" type="text/css">
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
            <li><a href="<?php echo url('/article'); ?>">资讯</a></li>
            <li><a href="<?php echo url('/article_list'); ?>">资讯列表</a></li>
            <li><a href="<?php echo url('/article_detail'); ?>">资讯详情</a></li>
            <li><a href="<?php echo url('/project'); ?>">项目列表 </a></li>
            <li><a href="<?php echo url('/project_detail'); ?>">项目详情</a></li>
            <li><a href="<?php echo url('/ranking'); ?>">排行</a></li>
            <li><a href="<?php echo url('/help'); ?>">帮助</a></li>
        </ul>
    </div>
</div>

    <div class="item2">
        <div class="main">
            <a href="http://3158.zzcms.net/zx/1">热点资讯</a> <a href="http://3158.zzcms.net/zx/2">创业指南</a> <a href="http://3158.zzcms.net/zx/3">最新动态</a> <a href="http://3158.zzcms.net/zx/4">市场行情</a>
            <a href="http://3158.zzcms.net/zx/5">创业秘籍</a> <a href="http://3158.zzcms.net/zx/6">最佳商机</a> <a href="http://3158.zzcms.net/zx/7">项目分析</a> <a href="http://3158.zzcms.net/zx/8">草根必读</a>
            <a href="http://3158.zzcms.net/zx/9">创业问答</a> <a href="http://3158.zzcms.net/zx/10">创业经历</a> <a href="http://3158.zzcms.net/zx/11">暴利行业</a> <a href="http://3158.zzcms.net/zx/12">项目筛选</a>
        </div>
    </div>
    <div class="main">
        <div class="pagebody">
            <table width="100%" border="0" cellspacing="8" ellpadding="0" class="bordercccccc">
                <tr>
                    <td>
                        <div class="titles"><span><a href=/zs/tesecanyin>更多...</a></span>特色餐饮排行</div>
                        <div class="content2">
                            <ul>
                                <LI><span>(801)</span>
                                    <font class=xuhao1>01</font>
                                    <A href="/zs/show-46.htm">整骨专家特色小吃</A>
                                </LI>
                                <LI><span>(714)</span>
                                    <font class=xuhao1>02</font>
                                    <A href="/zs/show-1.htm">炙口福</A>
                                </LI>
                                <LI><span>(604)</span>
                                    <font class=xuhao1>03</font>
                                    <A href="/zs/show-45.htm">翅宴五味锅</A>
                                </LI>
                                <LI><span>(579)</span>
                                    <font class=xuhao2>04</font>
                                    <A href="/zs/show-4.htm">咖啡零点吧</A>
                                </LI>
                                <LI><span>(501)</span>
                                    <font class=xuhao2>05</font>
                                    <A href="/zs/show-6.htm">阿宏砂锅饭</A>
                                </LI>
                                <LI><span>(499)</span>
                                    <font class=xuhao2>06</font>
                                    <A href="/zs/show-8.htm">呦格奶茶</A>
                                </LI>
                                <LI><span>(494)</span>
                                    <font class=xuhao2>07</font>
                                    <A href="/zs/show-103.htm">没空间开发奇偶发</A>
                                </LI>
                                <LI><span>(481)</span>
                                    <font class=xuhao2>08</font>
                                    <A href="/zs/show-9.htm">荷百味</A>
                                </LI>
                                <LI><span>(469)</span>
                                    <font class=xuhao2>09</font>
                                    <A href="/zs/show-5.htm">快乐星汉堡</A>
                                </LI>
                                <LI><span>(434)</span>
                                    <font class=xuhao2>10</font>
                                    <A href="/zs/show-7.htm">酷茶</A>
                                </LI>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="titles"><span><a href=/zs/fuzhuangxiebao>更多...</a></span>服装鞋包排行</div>
                        <div class="content2">
                            <ul>
                                <LI><span>(795)</span>
                                    <font class=xuhao1>01</font>
                                    <A href="/zs/show-2.htm">太阳公公童装</A>
                                </LI>
                                <LI><span>(650)</span>
                                    <font class=xuhao1>02</font>
                                    <A href="/zs/show-55.htm">玛娃服饰</A>
                                </LI>
                                <LI><span>(588)</span>
                                    <font class=xuhao1>03</font>
                                    <A href="/zs/show-47.htm">芮欧童装</A>
                                </LI>
                                <LI><span>(557)</span>
                                    <font class=xuhao2>04</font>
                                    <A href="/zs/show-54.htm">佐纳利男装</A>
                                </LI>
                                <LI><span>(508)</span>
                                    <font class=xuhao2>05</font>
                                    <A href="/zs/show-50.htm">杰米杰妮</A>
                                </LI>
                                <LI><span>(496)</span>
                                    <font class=xuhao2>06</font>
                                    <A href="/zs/show-51.htm">巴克巴童装</A>
                                </LI>
                                <LI><span>(487)</span>
                                    <font class=xuhao2>07</font>
                                    <A href="/zs/show-53.htm">亲闺密语</A>
                                </LI>
                                <LI><span>(486)</span>
                                    <font class=xuhao2>08</font>
                                    <A href="/zs/show-52.htm">梦回唐朝</A>
                                </LI>
                                <LI><span>(459)</span>
                                    <font class=xuhao2>09</font>
                                    <A href="/zs/show-49.htm">淘气娃童装</A>
                                </LI>
                                <LI><span>(448)</span>
                                    <font class=xuhao2>10</font>
                                    <A href="/zs/show-48.htm">土巴兔变色潮童服饰</A>
                                </LI>
                            </ul>
                        </div>
                    </td>
                </tr>
                <td>
                    <div class="titles"><span><a href=/zs/meirongyangsheng>更多...</a></span>美容养生排行</div>
                    <div class="content2">
                        <ul>
                            <LI><span>(558)</span>
                                <font class=xuhao1>01</font>
                                <A href="/zs/show-61.htm">欧雅顿</A>
                            </LI>
                            <LI><span>(549)</span>
                                <font class=xuhao1>02</font>
                                <A href="/zs/show-62.htm">民本按摩椅</A>
                            </LI>
                            <LI><span>(528)</span>
                                <font class=xuhao1>03</font>
                                <A href="/zs/show-3.htm">V&amp;U面膜</A>
                            </LI>
                            <LI><span>(515)</span>
                                <font class=xuhao2>04</font>
                                <A href="/zs/show-59.htm">唤醒世纪</A>
                            </LI>
                            <LI><span>(473)</span>
                                <font class=xuhao2>05</font>
                                <A href="/zs/show-58.htm">欧美雅洁</A>
                            </LI>
                            <LI><span>(465)</span>
                                <font class=xuhao2>06</font>
                                <A href="/zs/show-56.htm">果素堂</A>
                            </LI>
                            <LI><span>(449)</span>
                                <font class=xuhao2>07</font>
                                <A href="/zs/show-63.htm">嘉柏俪</A>
                            </LI>
                            <LI><span>(444)</span>
                                <font class=xuhao2>08</font>
                                <A href="/zs/show-57.htm">香磨五谷</A>
                            </LI>
                            <LI><span>(441)</span>
                                <font class=xuhao2>09</font>
                                <A href="/zs/show-60.htm">蝶美</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="titles"><span><a href=/zs/jiaoyuwangluo>更多...</a></span>教育网络排行</div>
                    <div class="content2">
                        <ul>
                            <LI><span>(513)</span>
                                <font class=xuhao1>01</font>
                                <A href="/zs/show-29.htm">益付宝</A>
                            </LI>
                            <LI><span>(473)</span>
                                <font class=xuhao1>02</font>
                                <A href="/zs/show-70.htm">博赞快速记忆</A>
                            </LI>
                            <LI><span>(458)</span>
                                <font class=xuhao1>03</font>
                                <A href="/zs/show-69.htm">逸休联盟</A>
                            </LI>
                            <LI><span>(454)</span>
                                <font class=xuhao2>04</font>
                                <A href="/zs/show-64.htm">开心玩国</A>
                            </LI>
                            <LI><span>(450)</span>
                                <font class=xuhao2>05</font>
                                <A href="/zs/show-71.htm">十牛校园</A>
                            </LI>
                            <LI><span>(448)</span>
                                <font class=xuhao2>06</font>
                                <A href="/zs/show-65.htm">微点生活</A>
                            </LI>
                            <LI><span>(433)</span>
                                <font class=xuhao2>07</font>
                                <A href="/zs/show-67.htm">红杉树</A>
                            </LI>
                            <LI><span>(426)</span>
                                <font class=xuhao2>08</font>
                                <A href="/zs/show-68.htm">东方龙商盟</A>
                            </LI>
                            <LI><span>(421)</span>
                                <font class=xuhao2>09</font>
                                <A href="/zs/show-66.htm">小猫搓衣</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                </tr>
                <td>
                    <div class="titles"><span><a href=/zs/jiajuhuanbao>更多...</a></span>家居环保排行</div>
                    <div class="content2">
                        <ul>
                            <LI><span>(576)</span>
                                <font class=xuhao1>01</font>
                                <A href="/zs/show-82.htm">汽车座垫精洗</A>
                            </LI>
                            <LI><span>(530)</span>
                                <font class=xuhao1>02</font>
                                <A href="/zs/show-85.htm">奥米兰卫浴</A>
                            </LI>
                            <LI><span>(494)</span>
                                <font class=xuhao1>03</font>
                                <A href="/zs/show-74.htm">恒天然</A>
                            </LI>
                            <LI><span>(470)</span>
                                <font class=xuhao2>04</font>
                                <A href="/zs/show-72.htm">忆涂德生态墙衣</A>
                            </LI>
                            <LI><span>(451)</span>
                                <font class=xuhao2>05</font>
                                <A href="/zs/show-83.htm">尚巢生态涂装馆</A>
                            </LI>
                            <LI><span>(439)</span>
                                <font class=xuhao2>06</font>
                                <A href="/zs/show-86.htm">迈克波罗</A>
                            </LI>
                            <LI><span>(408)</span>
                                <font class=xuhao2>07</font>
                                <A href="/zs/show-84.htm">天雄照明</A>
                            </LI>
                            <LI><span>(320)</span>
                                <font class=xuhao2>08</font>
                                <A href="/zs/show-81.htm">怡品饰家</A>
                            </LI>
                            <LI><span>(252)</span>
                                <font class=xuhao2>09</font>
                                <A href="/zs/show-100.htm">斯卡图整装定制</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="titles"><span><a href=/zs/muyingyongpin>更多...</a></span>母婴用品排行</div>
                    <div class="content2">
                        <ul>
                            <LI><span>(531)</span>
                                <font class=xuhao1>01</font>
                                <A href="/zs/show-42.htm">超级创造力</A>
                            </LI>
                            <LI><span>(511)</span>
                                <font class=xuhao1>02</font>
                                <A href="/zs/show-44.htm">考拉大冒险儿童乐园</A>
                            </LI>
                            <LI><span>(496)</span>
                                <font class=xuhao1>03</font>
                                <A href="/zs/show-87.htm">魔鼠童车加盟</A>
                            </LI>
                            <LI><span>(493)</span>
                                <font class=xuhao2>04</font>
                                <A href="/zs/show-88.htm">喜丽产后健康会所加盟</A>
                            </LI>
                            <LI><span>(427)</span>
                                <font class=xuhao2>05</font>
                                <A href="/zs/show-43.htm">开心小镇</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                </tr>
                <td>
                    <div class="titles"><span><a href=/zs/lipinzhuangshi>更多...</a></span>礼品装饰排行</div>
                    <div class="content2">
                        <ul>
                            <LI><span>(699)</span>
                                <font class=xuhao1>01</font>
                                <A href="/zs/show-36.htm">囍糖铺子</A>
                            </LI>
                            <LI><span>(487)</span>
                                <font class=xuhao1>02</font>
                                <A href="/zs/show-77.htm">膜法世界手机防水王</A>
                            </LI>
                            <LI><span>(474)</span>
                                <font class=xuhao1>03</font>
                                <A href="/zs/show-80.htm">稀奇古怪魔术道具加盟</A>
                            </LI>
                            <LI><span>(472)</span>
                                <font class=xuhao2>04</font>
                                <A href="/zs/show-39.htm">神奇金属画</A>
                            </LI>
                            <LI><span>(458)</span>
                                <font class=xuhao2>05</font>
                                <A href="/zs/show-78.htm">高创影像金属照片加盟</A>
                            </LI>
                            <LI><span>(429)</span>
                                <font class=xuhao2>06</font>
                                <A href="/zs/show-79.htm">玩偶</A>
                            </LI>
                            <LI><span>(426)</span>
                                <font class=xuhao2>07</font>
                                <A href="/zs/show-38.htm">哥凡尼冰晶画</A>
                            </LI>
                            <LI><span>(385)</span>
                                <font class=xuhao2>08</font>
                                <A href="/zs/show-76.htm">疯狂个性加盟</A>
                            </LI>
                            <LI><span>(378)</span>
                                <font class=xuhao2>09</font>
                                <A href="/zs/show-37.htm">西塞密室</A>
                            </LI>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="titles"><span><a href=/zs/jiancaiyuanliao>更多...</a></span>建材原料排行</div>
                    <div class="content2">
                        <ul>
                            <LI><span>(501)</span>
                                <font class=xuhao1>01</font>
                                <A href="/zs/show-41.htm">大溪地创意有氧石材</A>
                            </LI>
                            <LI><span>(496)</span>
                                <font class=xuhao1>02</font>
                                <A href="/zs/show-40.htm">爱丽达贝壳粉生态涂料</A>
                            </LI>
                            <LI><span>(357)</span>
                                <font class=xuhao1>03</font>
                                <A href="/zs/show-75.htm">泊乐帝隐形采暖</A>
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