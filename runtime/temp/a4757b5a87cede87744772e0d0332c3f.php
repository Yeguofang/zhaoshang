<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\Project\zhaoshang\public/../application/index/view/index/help.html";i:1573180382;s:60:"D:\Project\zhaoshang\application\index\view\common\head.html";i:1573357118;s:62:"D:\Project\zhaoshang\application\index\view\common\footer.html";i:1573375824;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-07 17:50:44
 * @LastEditTime: 2019-11-08 10:33:02
 -->
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $tdk[4]->title; ?></title>
    <meta content="<?php echo $tdk[4]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[4]->keyword; ?>" name="keywords" />
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
<meta name="baidu-site-verification" content="<?php echo $web['web_baidu']; ?>">
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/<?php echo $web['web_53kf']; ?>";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>


</head>

<body>
    <div class="main">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="x_bottom" style="margin-bottom:8px">
            <tr>
                <td width="33%" height="60"> <a href="/"><img src="<?php echo $web['web_logo']; ?>" border="0" onload='javascript:if(this.width>220) this.width=220;'></a></td>
                <td width="67%" align="right" valign="bottom">
                    <table width="87%" height="50" border="0" cellpadding="3" cellspacing="0">
                        <tr>
                            <td width="89%" align="right" valign="top">
                                <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=357856668&Site=zzcms项目加盟模板演示站&Menu=yes><img border="0" src=/static/home/picture/419f0e821e024082b0cbe95260b93e8b.gif alt="在线客服QQ">在线客服QQ:357856668</a>
                                客服电话:<?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?></td>
                        </tr>
                        <tr>
                            <td align="right" valign="bottom" style="color:cccccc"><a href="/">首页</a>&nbsp;|&nbsp;<a href="<?php echo url('/help'); ?>">帮助</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div class="bordercccccc" style="margin-bottom:10px">
            <div class="titlebig">帮助中心
                <a name="ding" id="ding"></a>
            </div>
            <div style="zoom: 1; overflow:auto;padding:10px">
                <ul>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <LI style="float:left;width:500px">【帮助】
                        <A href="<?php echo url('/help'); ?>#<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></A>
                    </LI>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
        <div class="titles"><span><a href="#ding">↑返回到顶部</a></span>
            <a name="<?php echo $h['id']; ?>"></a>
            <h3><?php echo $h['title']; ?></h3>
        </div>
        <div class="content1">
            <p>
           <?php echo $h['content']; ?>
            </p>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>


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

</body>

</html>