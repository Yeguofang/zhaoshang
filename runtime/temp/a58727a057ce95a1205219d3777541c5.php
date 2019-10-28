<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"/var/www/zs/public/../application/index/view/index/link.html";i:1572244356;s:53:"/var/www/zs/application/index/view/common/footer.html";i:1570958938;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>图片广告</title>
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
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
                                客服电话:400-728-9861</td>
                        </tr>
                        <tr>
                            <td align="right" valign="bottom" style="color:cccccc"><a href="http://3158.zzcms.net">首页</a>&nbsp;|&nbsp;<a href="/help.htm">帮助</a>
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
                    <div class="content1">
                        <table width='100%' border='0' cellpadding='2' cellspacing='1' class='bgcolor2'>
                            <tr>
                                <?php if(is_array($text) || $text instanceof \think\Collection || $text instanceof \think\Paginator): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>
                                <td bgcolor='#FFFFFF'>
                                    <a href="<?php echo $e['url']; ?>" target='_blank'><?php echo $e['title']; ?></a>
                                </td>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tr>
                        </table>
                    </div>
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
                                    <a href="/zx/show-38.htm"><?php echo $h['name']; ?></a>
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
                                    <a href="/zx/show-92.htm"><?php echo $r['name']; ?></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
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