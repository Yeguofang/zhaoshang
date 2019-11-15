<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\Project\zhaoshang\public/../application/admin\view\advert\edit.html";i:1573118990;s:63:"D:\Project\zhaoshang\application\admin\view\layout\default.html";i:1572765525;s:60:"D:\Project\zhaoshang\application\admin\view\common\meta.html";i:1572765525;s:62:"D:\Project\zhaoshang\application\admin\view\common\script.html";i:1572765525;}*/ ?>
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
                <?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $u['id']; ?>"<?php if(in_array(($u['id']), is_array($row['company_id'])?$row['company_id']:explode(',',$row['company_id']))): ?> selected <?php endif; ?>><?php echo $u['company_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div> 
    </div> 
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">类型</label>
        <div class="col-xs-12 col-sm-8">
            <div class="radio">
                <label for="row[type]-normal">
                <input id="row[type]-normal" checked="checked" name="row[type]" type="radio" value="1" <?php if(($row['type'] == 1)): ?> checked <?php endif; ?>> 图片</label>
                <label for="row[type]-hidden">
                <input id="row[type]-hidden" name="row[type]" type="radio" value="0" <?php if(($row['type'] == 0)): ?> checked <?php endif; ?>>文字</label>
            </div>
        </div>
    </div>
    
  
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">标题</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-title" data-rule="required" class="form-control" name="row[title]" type="text" value="<?php echo htmlentities($row['title']); ?>">
        </div>
    </div>
   
    <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2">URL链接</label>
            <div class="col-xs-12 col-sm-8">
                <input id="c-url"  class="form-control" name="row[url]" type="text" value="<?php echo htmlentities($row['url']); ?>">
            </div>
        </div>

    <div class="form-group" id="img">
        <label class="control-label col-xs-12 col-sm-2">图片</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-image" class="form-control" size="50" name="row[image]" type="text" value="<?php echo htmlentities($row['image']); ?>">
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
        <label class="control-label col-xs-12 col-sm-2">位置</label>
        <div class="col-xs-12 col-sm-8">
            <select  id="c-flag" class="form-control selectpicker" multiple="" name="row[flag][]">
                <?php if(is_array($flagList) || $flagList instanceof \think\Collection || $flagList instanceof \think\Paginator): if( count($flagList)==0 ) : echo "" ;else: foreach($flagList as $key=>$vo): ?>
                <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['flag'])?$row['flag']:explode(',',$row['flag']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">权重排序</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-weigh" class="form-control" name="row[weigh]" type="number" value="<?php echo htmlentities($row['weigh']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">状态</label>
        <div class="col-xs-12 col-sm-8">

            <input id="c-switch" name="row[switch]" type="hidden" value="<?php echo $row['switch']; ?>">
            <a href="javascript:;" data-toggle="switcher" class="btn-switcher" data-input-id="c-switch" data-yes="1" data-no="0">
                <i class="fa fa-toggle-on text-success <?php if($row['switch'] == '0 '): ?>fa-flip-horizontal text-gray<?php endif; ?> fa-2x"></i>
            </a>
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

<script type="text/javascript" src="/static/home/js/jquery.js"></script>
<script>
$(document).ready(function(){

    var img = $('input[name="row[type]"]:checked').val(); 
    if(img == 0){
        $('#img').hide();   //隐藏上传控件
    }
    
    $("input[name=row[type]]").click(function(){  
        var type = $('input[name="row[type]"]:checked').val(); 
        if(type == 1){  //图片类型
            $('#img').show();
        }
        if(type == 0){ //文字类型
            $('#c-image').val('');
            var a  = $('#c-image').val();   //清空图片地址
            $('.col-xs-3').remove(); //删除预览图
            $('#img').hide();   //隐藏上传控件
        }
    });
});
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