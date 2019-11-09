<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\Project\zhaoshang\public/../application/index/view/index/link.html";i:1573295953;s:62:"D:\Project\zhaoshang\application\index\view\common\footer.html";i:1573282124;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>图片广告</title>
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
</head>
<style>
.txt{
    float: left;
    font-size: 16px;
    margin-bottom: 5px;
}
.txtbox{
    background-color:#fff ;
    float: left;
    padding-bottom: 30px;
}
</style>
<body>
    <div class="main">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="x_bottom" style="margin-bottom:8px">
            <tr>
                <td width="33%" height="60"> <a href="/"><img src="<?php echo $web['web_logo']; ?>" border="0" onload='javascript:if(this.width>220) this.width=220;'></a></td>
                <td width="67%" align="right" valign="bottom">
                    <table width="87%" height="50" border="0" cellpadding="3" cellspacing="0">
                        <tr>
                            <td width="89%" align="right" valign="top">
                                <a target=blank href=http://wpa.qq.com/msgrd?v=1&uin=<?php echo $web['web_qq']; ?>&Site=<?php echo $web['web_name']; ?>&Menu=yes>在线客服QQ:<?php echo $web['web_qq']; ?></a>
                                客服电话：<?php echo substr($web['web_phone'],0,3); ?>-<?php echo substr($web['web_phone'],3,4); ?>-<?php echo substr($web['web_phone'],7,4); ?></td>
                        </tr>
                        <tr>
                            <td align="right" valign="bottom" style="color:cccccc"><a href="/">首页</a>&nbsp;|&nbsp;<a href="/help">帮助</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        
        
            <div class="pagebody">
                <!-- 图文广告-->
                <div class="left">
                    <div class="titles">
                        <h3>图片广告</h3>
                    </div>
                    <div class="adStyle2">
                        <ul>
                            <?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo $a['url']; ?>" target="_blank" >
                                    <img data-original="<?php echo $a['image']; ?>" alt="<?php echo $a['title']; ?>" src="<?php echo $a['image']; ?>" style="width:125px;height:94px;"
                                        style="display: inline;">
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <?php echo $image->render(); ?>
                     <!-- 图文广告 -->
                    
                    <!-- 文字链接 -->
                    <div class="titles">
                        <h3>文字链接</h3>
                    </div>
                    <div class="txtbox">
                       <ul >
                                <?php if(is_array($text) || $text instanceof \think\Collection || $text instanceof \think\Paginator): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>
                                <li class="txt">
                                    　<a href="<?php echo $e['url']; ?>"   target='_blank'><?php echo $e['title']; ?></a>　|　
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div><br/>
                    <?php echo $text->render(); ?>
                    <!-- 文字链接 -->
                </div>


                <div class="right">
                    
                    <div class="titles"><span>&nbsp;</span>
                        <h3>热门项目</h3>
                    </div>
                    <div class="content1">
                        <ul>
                            <?php if(is_array($project['hot']) || $project['hot'] instanceof \think\Collection || $project['hot'] instanceof \think\Paginator): $i = 0; $__LIST__ = $project['hot'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
                            <li><span style="width:80px" title="阅832次">(<?php echo $h['views']; ?>)</span>
                                <font <?php if(($key == 0 || $key == 1 || $key==2)): ?>class="xuhao1" <?php endif; ?>><?php echo $key+1; ?></font>
                                <a target="_bank" href="<?php echo url('/project_detail'); ?>/<?php echo $h['id']; ?>"><?php echo $h['name']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
    
                    <div class="titles"><span>&nbsp;</span>
                        <h3>推荐项目</h3>
                    </div>
                    <div class="content1">
                        <ul>
                            <?php if(is_array($project['rec']) || $project['rec'] instanceof \think\Collection || $project['rec'] instanceof \think\Paginator): $i = 0; $__LIST__ = $project['rec'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
                            <li><span style="width:80px">(<?php echo $r['views']; ?>)</span>
                                <font  <?php if(($key == 0 || $key == 1 || $key==2)): ?>class="xuhao1" <?php endif; ?>><?php echo $key+1; ?></font>
                                <a target="_bank" href="<?php echo url('/project_detail'); ?>/<?php echo $r['id']; ?>"><?php echo $r['name']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            
    </div>

    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-07 18:30:41
 * @LastEditTime: 2019-11-09 14:48:43
 -->
<div style="height:10px;clear:both;"></div>
<div id="dlstepbox" >
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

<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/<?php echo $web['web_53kf']; ?>";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
</body>

</html>