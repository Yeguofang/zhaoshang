<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\Project\zhaoshang\public/../application/admin\view\article\add.html";i:1573113800;s:63:"D:\Project\zhaoshang\application\admin\view\layout\default.html";i:1572765525;s:60:"D:\Project\zhaoshang\application\admin\view\common\meta.html";i:1572765525;s:62:"D:\Project\zhaoshang\application\admin\view\common\script.html";i:1572765525;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">所属公司</label>
        <div class="col-xs-12 col-sm-8">
            <select id="c-company_id" data-rule="required" class="form-control selectpicker" name="row[company_id]">
                <option value="">请选择</option>
                <?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $u['id']; ?>"><?php echo $u['company_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div> 
    </div> 
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">所属分类</label>
        <div class="col-xs-12 col-sm-8">
            <select id="c-pid" data-rule="required" class="form-control selectpicker" name="row[category_id]">
                    <option value="">请选择</option>
                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$vo): ?>
                        <option data-type="<?php echo $vo['type']; ?>" value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">位置</label>
        <div class="col-xs-12 col-sm-8">

            <select  id="c-flag" class="form-control selectpicker" multiple="" name="row[flag][]">
                <?php if(is_array($flagList) || $flagList instanceof \think\Collection || $flagList instanceof \think\Paginator): if( count($flagList)==0 ) : echo "" ;else: foreach($flagList as $key=>$vo): ?>
                <option value="<?php echo $key; ?>" ><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">标题</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-title" data-rule="required" class="form-control" name="row[title]" type="text">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">缩略图</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-image" class="form-control" size="50" name="row[image]" type="text">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-image"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-image" class="btn btn-primary fachoose" data-input-id="c-image" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-image"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-image"></ul>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">tdk-关键字</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-tdk_key"  class="form-control" name="row[tdk_key]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">tdk-描述</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-tdk_desc"  class="form-control" name="row[tdk_desc]" type="text" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">点击量</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-views"  class="form-control" name="row[views]" type="number">
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">权重排序</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-weigh" class="form-control" name="row[weigh]" type="number">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">状态</label>
        <div class="col-xs-12 col-sm-8">

            <input id="c-switch" name="row[switch]" type="hidden">
            <a href="javascript:;" data-toggle="switcher" class="btn-switcher" data-input-id="c-switch" data-yes="1" data-no="0">
                <i class="fa fa-toggle-on text-success fa-flip-horizontal text-gray fa-2x"></i>
            </a>
        </div>
    </div>

    <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2"><?php echo __('Content'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                    <script id="container" name="row[content]" type="text/plain"></script>
            </div>
        </div>

    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

  <!-- 配置文件 -->
  <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
  <!-- 编辑器源码文件 -->
  <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
  <script>
                // 实例化编辑器 
                var editor = UE.getEditor('container');
  </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>