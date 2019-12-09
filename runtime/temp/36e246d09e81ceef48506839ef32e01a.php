<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\Project\zhaoshang\public/../application/index/view/mobile/index/index.html";i:1575440474;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1575105677;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1575188414;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1575359084;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $tdk[0]->title; ?></title>
    <meta content="<?php echo $tdk[0]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[0]->keyword; ?>" name="keywords" />

    
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link href="/static/mobile/css/swiper.css" rel="stylesheet">
<script src="/static/mobile/js/jquery.js"></script>
<script src="/static/mobile/js/layer.js"></script>
<script src="/static/mobile/js/jquery.lazyload.js"></script>
<script src="/static/mobile/js/swiper.js"></script>
<script src="/static/mobile/js/common.js"></script>
<script src="/static/mobile/js/index.js"></script>
<link href="/static/mobile/css/common.css" rel="stylesheet">
<link href="/static/mobile/css/index.css" rel="stylesheet">
</head>

<body>

    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-30 16:29:56
 * @LastEditTime: 2019-12-01 16:20:14
 -->
<header class="header">
        <div class="left">
            <div class="logo">
                    <a href="/">
                        <img src="<?php echo $web['web_logo']; ?>">
                    </a>
            </div>
            <div class="return">
                <a href="javascript:history.go(-1);">
                    <img src="/static/mobile/picture/c27e82981d1f8cf843cb80c467ca4d4d.png">
                </a>
            </div>
        </div>
        <div class="title">项目库</div>
        <div class="search">
            <form action="<?php echo url('/search'); ?>" method="post">
                <select name="type" style="width: 60px;height: 25px;font-size: 12px;border: 0px;background-color: rgb(241, 238, 238);">
                        <option value="project" selected>招 商</option>
                        <option value="article">资 讯</option>
                    </select>
                <input placeholder="感兴趣的品牌项目" class="search-input" type="text" value="" name="keyword">
                <span><img src="/static/mobile/picture/24e35ae249e906015475e3040991b772.png"></span>
                <input class="submit-input" type="submit">
            </form>
        </div>
    </header>
    <div class="top-bg">


        <div class="classification">

            <section class="slide">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if(is_array($slide) || $slide instanceof \think\Collection || $slide instanceof \think\Paginator): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide">
                            <a href="<?php echo $s['url']; ?>" rel="nofollow">
                                <img class="swiper-lazy lazy" data-original="<?php echo $s['image']; ?>" src="<?php echo $s['image']; ?>"
                                    title="<?php echo $s['title']; ?>">
                            </a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <div class="content">
                <ul>
                    <?php if(is_array($project_cate) || $project_cate instanceof \think\Collection || $project_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $project_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                    <li>
                        <h2>
                            <div class="parent">
                                <div class="img">
                                    <a href="<?php echo url('/project'); ?>/<?php echo $c['id']; ?>">
                                        <img class="lazy" src="<?php echo $c['image']; ?>">
                                    </a>
                                </div>
                                <div class="text">
                                    <a href="<?php echo url('/project'); ?>/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a>
                                </div>
                            </div>
                        </h2>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li>
                        <h2>
                            <div class="parent">
                                <div class="img">
                                    <a href="<?php echo url('/article'); ?>">
                                        <img class="lazy" src="/static/home/images/zx.png">
                                    </a>
                                </div>
                                <div class="text">
                                    <a href="<?php echo url('/article'); ?>">创业资讯</a>
                                </div>
                            </div>
                        </h2>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <div class="latestin3">
        <div class="title">招商项目</div>
        <div class="bg">
            <div class="tab">
                <ul>
                    <?php foreach($index as $v): ?>
                    <li class="<?php if(($key == 0)): ?>active<?php endif; ?>"><a href="javascript:;"><?php echo $v['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach($index as $v): ?>
                    <div class="swiper-slide">
                        <div class="commonListImgText">
                            <ul>
                                <?php if(is_array($v['project']) || $v['project'] instanceof \think\Collection || $v['project'] instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($v['project']) ? array_slice($v['project'],0,10, true) : $v['project']->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <div class="parent" href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>">
                                        <div class="img">
                                            <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" rel="nofollow">
                                                <img class="swiper-lazy lazy" src="<?php echo $p['image']; ?>">
                                            </a>
                                        </div>
                                        <div class="text">
                                            <div class="title">
                                                <span><a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>"><?php echo $p['name']; ?></a></span>
                                                <span>￥
                                                    <?php if(($p['price'] == 1 )): ?>
                                                    1-3万
                                                    <?php elseif(($p['price'] == 2)): ?>
                                                    3-5万
                                                    <?php elseif(($p['price'] == 3)): ?>
                                                    5-10万
                                                    <?php elseif(($p['price'] == 4)): ?>
                                                    10万以上
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                            <div class="belongs">
                                                <span>门店：<?php echo rand(000,299);?>家</span>
                                                <span class="addbtns"><a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>"
                                                        rel="nofollow">查看详情</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <div class="more-btn">
                                <div class="down">
                                    <a href="<?php echo url('/project'); ?>/<?php echo $v['id']; ?>">
                                        <span>查看更多</span>
                                        <img src="/static/mobile/picture/55ec8b835ce39d4ece38224a8bab98de.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <br />
    <div class="news">
        <div class="commonTabTages">
            <ul>
                <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($article) ? array_slice($article,0,4, true) : $article->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="<?php if(($key ==0)): ?>active <?php endif; ?>"><a href="javascript:;"><?php echo $vo['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($article) ? array_slice($article,0,4, true) : $article->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="swiper-slide">
                    <ul>
                        <?php foreach($vo['content'] as $a): ?>
                        <li>
                            <div class="followImg" href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>">
                                <div class="left">
                                    <div class="title"><a
                                            href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>"><?php echo $a['title']; ?></a>
                                    </div>
                                    <div class="desc"><a href="/news/124970.html"><?php echo $a['desc']; ?></a>
                                    </div>
                                    <div class="date">
                                        <img src="/static/mobile/picture/3cd87f6675b141d9d3350de6078f1d61.png">
                                        <span><?php echo date('Y-m-d',$a['createtime']); ?></span>
                                    </div>
                                </div>
                                <div class="img">
                                    <a rel="nofollow" href="<?php echo url('/article_detail'); ?>/<?php echo $a['category_id']; ?>/<?php echo $a['id']; ?>">
                                        <img class="swiper-lazy lazy" src="<?php echo $a['image']; ?>" title="<?php echo $a['title']; ?>">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="more-btn">
                        <div class="down">
                            <a href="<?php echo url('/article_list'); ?>/<?php echo $vo['id']; ?>">
                                <span>查看更多</span>
                                <img src="/static/mobile/picture/55ec8b835ce39d4ece38224a8bab98de.png">
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
    </div>




    <!--
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-30 15:16:30
 * @LastEditTime: 2019-12-03 15:44:44
 -->

 <div class="commonStatement" style="padding-bottom: 50px;">
    <div class="bg">
        <div class="title">本站声明</div>
        <div class="desc">
           <?php echo $web['web_avow']; ?>
        </div>
    </div>
    <div class="bg2">
        <p>Copyright © <?php echo $web['web_name']; ?></p>
        <p>友情提示：<span>投资有风险，咨询请细致</span>，以便成功加盟。</p>
        <div class="addnewfooter">
            <a href="<?php echo url('/about'); ?>" rel="nofollow">关于我们</a>
            <a href="<?php echo url('/lxwm'); ?>" rel="nofollow">联系我们</a>
            <a href="<?php echo url('/mzsm'); ?>" rel="nofollow">免责声明</a>
            <a href="<?php echo url('/tssc'); ?>" rel="nofollow">投诉删除</a>
        </div>
    </div>
</div>
<footer class="footer">
    <ul>
        <li >
            <a href="/">
                <?php if((request()->controller() == 'Index' && request()->action() == 'index')): ?>
                <img src="/static/mobile/picture/a2024139e8d4ab4fae68087c6ee8c030.png">
                <?php else: ?>
                <img src="/static/mobile/picture/9004914b98fa09eb39f3719a94ec8a94.png">
                <?php endif; ?>
                <span>首页</span>
            </a>
        </li>
        <li >
            <h1>
                 <?php if(is_array($project_cate) || $project_cate instanceof \think\Collection || $project_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $project_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;if(($key == 0)): ?>
                <a href="<?php echo url('/project'); ?>/<?php echo $c['id']; ?>">
                    <?php if((request()->controller() == 'Project' &&  request()->action() != 'ranking')): ?>
                    <img src="/static/mobile/picture/7f9f322c2462b2501a79e548b0ef0969.png">
                    <?php else: ?>
                    <img src="/static/mobile/picture/97e9f713f8859d9cab0422fa3ed61396.png">
                    <?php endif; ?>
                    <span>项目库</span>
                </a>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </h1>
        </li>
        <li >
            <a href="/ranking">
                <?php if((request()->action() == 'ranking')): ?>
                <img  src="/static/mobile/picture/c1f301996e866215f80987290da25fce.png">
                <?php else: ?>
                <img src="/static/mobile/picture/30132e0d9549c2976eee067b8b9ffe3a.png">
                <?php endif; ?>
                <span>排行榜</span>
            </a>
        </li>
        
        <li >
            <a href="/article">
                <?php if((request()->controller() == 'Article')): ?>
                <img src="/static/mobile/picture/e6b23ae996955e5be242ffdca92beefe2.png">
                <?php else: ?>
                <img  src="/static/mobile/picture/e6b23ae996955e5be242ffdca92beefe.png">
                <?php endif; ?>
                <span>资讯</span>
            </a>
        </li>
    </ul>
</footer>


    <div class="commonTop">
        <img src="/static/mobile/picture/fc51cd31a0b75c3aa1f88cc11f63ed1b.png">
    </div>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?912f17081295b3c5623472573e1a1a7e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script>
        (function () {
            var src = "https://jspassport.ssl.qhimg.com/11.0.1.js?d182b3f28525f2db83acfaaf6e696dba";
            document.write('<script src="' + src + '" id="sozz"><\/script>');
        })();
    </script>

    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?5294d4276f52adb2e38d1599fd6e2815";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</html>