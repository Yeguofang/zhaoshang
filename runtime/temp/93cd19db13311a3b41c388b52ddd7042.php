<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\Project\zhaoshang\public/../application/index/view/mobile/project/list.html";i:1575279662;s:60:"D:\Project\zhaoshang\application\index\view\mobile\head.html";i:1575105677;s:62:"D:\Project\zhaoshang\application\index\view\mobile\header.html";i:1575188414;s:62:"D:\Project\zhaoshang\application\index\view\mobile\footer.html";i:1575359084;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $tdk[3]->title; ?></title>
    <meta content="<?php echo $tdk[3]->description; ?>" name="description" />
    <meta content="<?php echo $tdk[3]->keyword; ?>" name="keywords" />
    <link href="/static/mobile/css/projectpage.css" rel="stylesheet">
      
    
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
        
    

    <div class="latestin3"  >
            <div class="title">热门项目</div>
            <div class="bg">
                <div class="tab">
                    <ul>
                   
                        <?php if(is_array($project_cate) || $project_cate instanceof \think\Collection || $project_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $project_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                        <li class="" style="width:20%;"><a href="<?php echo url('/project'); ?>/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="swiper-container">
                        <div class="swiper-wrapper" style="height: 100%;">
                            <!-- <div class="swiper-slide"> -->
                                <div class="content">
                                    <ul style="height: 100%;">
                                            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                                            <li ><a href="<?php echo url('/project'); ?>/<?php echo $c['pid']; ?>/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a></li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
               
            </div>
        </div>

        <div class="projectPage" style="margin-top: 10px;" >
                <div class="contentList">
                    <div class="bg">
                        <ul class="asd">
                                <?php if(is_array($projects) || $projects instanceof \think\Collection || $projects instanceof \think\Paginator): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="img">
                                    <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>" rel="nofollow">
                                        <img class="lazy" src="<?php echo $p['image']; ?>">
                                     </a>
                                </div>
                                <div class="text">
                                    <div class="left">
                                        <div class="title">
                                            <h2><a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>"><?php echo $p['name']; ?></a>
                                            </h2>
                                        </div>
                                        <div class="price"> ￥  
                                             <?php if(($p['price'] == 1 )): ?>
                                                1-3万
                                                <?php elseif(($p['price'] == 2)): ?>
                                                3-5万
                                                <?php elseif(($p['price'] == 3)): ?>
                                                5-10万
                                                <?php elseif(($p['price'] == 4)): ?>
                                                10万以上
                                            <?php endif; ?>
                                        </div>
        
                                        <div class="smallTab">
                                            <a class="tag"><?php echo $name1['name']; ?></a>
                                            <?php if(($name2['name'] != null)): ?>
                                             <a  class="tag"><?php echo $name2['name']; ?></a>
                                            <?php endif; ?>
                                            <a ><?php echo $p['areaname']; ?></a></div>
                                        <div class="desc">招商区域：<?php echo $p['city']; ?></div>
                                    </div>
                                    <div class="right">
                                        <div class="join">
                                            <a href="<?php echo url('/project_detail'); ?>/<?php echo $p['id']; ?>"> <button class="btn-confirm">申请加盟</button></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                                
                    </div>
                </div>
            </div>
            

    <?php echo $project->render(); ?>

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




</html>
