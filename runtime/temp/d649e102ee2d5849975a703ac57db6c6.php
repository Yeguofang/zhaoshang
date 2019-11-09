<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\Project\zhaoshang\public/../application/index\view\article\detail.html";i:1573270339;s:60:"D:\Project\zhaoshang\application\index\view\common\head.html";i:1573180526;s:62:"D:\Project\zhaoshang\application\index\view\common\header.html";i:1573272021;s:62:"D:\Project\zhaoshang\application\index\view\common\footer.html";i:1573202891;}*/ ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $data['title']; ?></title>
    <meta name="keywords" content="<?php echo $data['tdk_key']; ?>" />
    <meta name="description" content="<?php echo $data['tdk_desc']; ?>" />
    <link href="/static/home/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/jdimg2.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/static/home/js/jquery.js"></script>
<script src="/static/home/js/jquery.lazyload.js"></script>
<script language="JavaScript" src="/static/home/js/qt.js"></script>
<script language="JavaScript" src="/static/home/js/divselect.js"></script>
<meta name="baidu-site-verification" content="<?php echo $web['web_baidu']; ?>">


</head>

<body>

    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-09 12:00:21
 * @LastEditTime: 2019-11-09 12:00:21
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
                        来源：<?php echo $web['web_name']; ?>&nbsp;&nbsp;发布日期：2018-10-29&nbsp;&nbsp;发布者：<?php echo $data['company_name']; ?>&nbsp;&nbsp;共阅254次  字体：<a href='javascript:fontZoom(22)'>大</a> <a href='javascript:fontZoom(14)'>中</a> <a href='javascript:fontZoom(12)'>小</a>
                    </div>
                    <div id="fontzoom">
                        <?php echo $data['content']; ?>
                    </div>

                    <div style="text-align:center;padding:10px;">
                        <a href="http://www.jiathis.com/share/" class="jiathis" target="_blank">[分享到...]</a>
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
                    <?php if(($data['comment'] == null)): ?>
                    &nbsp;暂无评论
                    <?php else: if(is_array($data['comment']) || $data['comment'] instanceof \think\Collection || $data['comment'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['comment'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                    匿名网友：<?php echo $c['content']; ?><br/>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="titles">
                    <h3>发表评论</h3>
                </div>
                <div class="content1">
                    <form name="form2" id="form2">
                            <div contenteditable="true" id="divtextarea" onblur="AddContentFromDiv('content','divtextarea')"></div>
                            <?php echo token(); ?>
                            <input name="content" type="hidden"" id="content"  size="22" maxlength="150">
                            <input name="id" type="hidden"" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aid"  value="<?php echo $data['category_id']; ?>"/>
                            <input type="hidden" name="company_id"  value="<?php echo $data['company_id']; ?>"/>
                            <input type="hidden" name="url"  value="<?php echo url('/article_detail'); ?>/<?php echo $data['category_id']; ?>/"/>

                            <input name="phone"" type="text" id="phone"  placeholder="请输入手机号" />
                            <input style="margin-left: 20px;" type="button"  onclick="checkform()" value="发表评论" />
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

    </div>

    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-07 18:30:41
 * @LastEditTime: 2019-11-08 16:47:09
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
    
            function AddContentFromDiv(obj1,obj2){
            document.getElementById(obj1).value=document.getElementById(obj2).innerHTML;
            }
            function checkform() {
                var id = document.form2.id.value;
                var content = document.form2.content.value;
                var phone = document.form2.phone.value;
                var aid = document.form2.aid.value;
                var company_id = document.form2.company_id.value;
                var url = document.form2.url.value;
                var token = document.form2.__token__.value;

                if (content== "") {
                    alert("内容不能为空！");
                    return false;
                }

                var txt = /^[1][3,4,5,6,7,8][0-9]{9}$/;
	            if (phone=="" || !txt.test(phone)){
                    alert("请输入正确的手机号");
                    return false;
                }

                $.ajax({
                    type: "post",
                    async: false,
                    url: url+id,
                    //后台数据处理-下面有具体实现
                    data: {
                        company_id:company_id,
                        phone:phone,
                        content:content,
                        aid:aid,
                        token:token,
                        id:id,
                    },
                    success: function (res) {
                        if(res.code == 1){
                            alert(res.msg);
                            window.location.reload();
                        }else{
                            alert(res.msg);
                            window.location.reload();
                        }
                    }   
                });

            }
    
        </script>
</body>

</html>