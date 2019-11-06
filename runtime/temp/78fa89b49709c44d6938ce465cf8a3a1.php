<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\Project\zhaoshang\public/../application/index\view\menber\user\register.html";i:1573033334;s:60:"D:\Project\zhaoshang\application\index\view\common\meta.html";i:1572765525;s:60:"D:\Project\zhaoshang\application\index\view\common\head.html";i:1572765525;s:62:"D:\Project\zhaoshang\application\index\view\common\footer.html";i:1572765525;}*/ ?>
<!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-06 17:40:24
 * @LastEditTime: 2019-11-06 17:42:05
 -->
<meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit"> <?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>"> <?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>"> <?php endif; ?>
<meta name="author" content="FastAdmin">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />

<link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<script type="text/javascript">
    var require = {
        config: {
            $config | json_encode
        }
    };
</script> <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
<div class="main">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="x_bottom" style="margin-bottom:8px">
        <tbody>
            <tr>
                <td width="33%" height="60"> <a href="http://3158.zzcms.net"><img src="http://3158.zzcms.net/image/logo.png" border="0" onload="javascript:if(this.width>220) this.width=220;"></a></td>
                <td width="67%" align="right" valign="bottom">
                    <table width="87%" height="50" border="0" cellpadding="3" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="89%" align="right" valign="top">
                                    <a target="blank" href="http://wpa.qq.com/msgrd?v=1&amp;uin=357856668&amp;Site=zzcms项目加盟模板演示站&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:357856668:4" alt="在线客服QQ">在线客服QQ:357856668</a>
                                    客服电话:400-728-9861</td>
                            </tr>
                            <tr>
                                <td align="right" valign="bottom" style="color:cccccc"><a href="<?php echo url('/'); ?>">首页</a>&nbsp;|&nbsp;<a href="<?php echo url('/help'); ?>">帮助</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div id="content-container" class="container">
    <div class="user-section login-section">
        <div class="logon-tab clearfix"> <a href="<?php echo url('menber/user/login'); ?>?url=<?php echo urlencode($url); ?>"><?php echo __('Sign in'); ?></a> <a class="active"><?php echo __('Sign up'); ?></a> </div>
        <div class="login-main">
            <form name="form1" id="register-form" class="form-vertical" method="POST" action="">
                <input type="hidden" name="invite_user_id" value="0" />
                <input type="hidden" name="url" value="<?php echo $url; ?>" /> <?php echo token(); ?>

                <div class="form-group">
                    <label class="control-label">账号</label>
                    <div class="controls">
                        <input type="text" id="username" name="username" data-rule="required;username" class="form-control input-lg" placeholder="请填写账号">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">密码</label>
                    <div class="controls">
                        <input type="password" id="password" name="password" data-rule="required;password" class="form-control input-lg" placeholder="请填写密码">
                        <p class="help-block"></p>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label">手机号</label>
                    <div class="controls">
                        <input type="text" id="mobile" name="mobile" data-rule="required;mobile" class="form-control input-lg" placeholder="请填写正确的手机号码">
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?php echo __('Sign up'); ?></button>
                </div>
            </form>
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
<script src="/static/home/js/scrolltop.js" type="text/javascript" language="JavaScript"></script>

<div style="display: none" id="goTopBtn">
</DIV>