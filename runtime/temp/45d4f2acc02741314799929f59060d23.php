<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"D:\Project\zhaoshang\public/../application/admin\view\general\web\index.html";i:1573282037;s:63:"D:\Project\zhaoshang\application\admin\view\layout\default.html";i:1572765525;s:60:"D:\Project\zhaoshang\application\admin\view\common\meta.html";i:1572765525;s:62:"D:\Project\zhaoshang\application\admin\view\common\script.html";i:1572765525;}*/ ?>
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
                                <style type="text/css">
    @media (max-width: 375px) {
        .edit-form tr td input {
            width: 100%;
        }
        .edit-form tr th:first-child,
        .edit-form tr td:first-child {
            width: 20%;
        }
        .edit-form tr th:nth-last-of-type(-n+2),
        .edit-form tr td:nth-last-of-type(-n+2) {
            display: none;
        }
    }
    
    .edit-form table>tbody>tr td a.btn-delcfg {
        visibility: hidden;
    }
    
    .edit-form table>tbody>tr:hover td a.btn-delcfg {
        visibility: visible;
    }
</style>
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#web" data-toggle="tab">网站信息</a>
            </li>
            <li>
                <a href="#key" data-toggle="tab">网站运行</a>
            </li>
            <li>
                <a href="#tdk" data-toggle="tab">TDK</a>
            </li>
        </ul>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">

            <div class="tab-pane fade active in" id="web">
                <div class="widget-body no-padding">
                    <form id="web-form" class="edit-form form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo url('general.web/edit'); ?>">
                        <?php echo token(); ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="10%">标题</th>
                                    <th width="50%">值</th>
                                    <th width="30%">说明</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td> 网站 logo</td>
                                    <td>
                                        <div class="input-group">
                                            <input id="c-avatar" data-rule="" class="form-control" size="50" name="row[web_logo]" type="text" value="<?php echo $date->web_logo; ?>">
                                            <div class="input-group-addon no-border no-padding">
                                                <span><button type="button" id="plupload-avatar" class="btn btn-danger plupload" data-input-id="c-avatar" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-avatar"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                                                <span><button type="button" id="fachoose-avatar" class="btn btn-primary fachoose" data-input-id="c-avatar" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                                            </div>
                                            <span class="msg-box n-right" for="c-avatar"></span>
                                        </div>
                                        <ul class="row list-inline plupload-preview" id="p-avatar"></ul>
                                    </td>
                                    <td></td>
                                </tr>


                                <tr>
                                        <td>手机站二维码</td>
                                        <td>
                                            <div class="input-group">
                                                <input id="d-avatar" data-rule="" class="form-control" size="50" name="row[web_ewm]" type="text" value="<?php echo $date->web_ewm; ?>">
                                                <div class="input-group-addon no-border no-padding">
                                                    <span><button type="button" id="d-plupload-avatar" class="btn btn-danger plupload" data-input-id="d-avatar" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="pd-avatar"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                                                    <span><button type="button" id="d-fachoose-avatar" class="btn btn-primary fachoose" data-input-id="d-avatar" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                                                </div>
                                                <span class="msg-box n-right" for="d-avatar"></span>
                                            </div>
                                            <ul class="row list-inline plupload-preview" id="pd-avatar"></ul>
                                        </td>
                                        <td></td>
                                    </tr>
    
                            
                                <tr>
                                    <td> 网站名称</td>
                                    <td>
                                        <input type="text" name="row[web_name]" value="<?php echo $date->web_name; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> 公安部备案号</td>
                                    <td>
                                        <input type="text" name="row[web_beian]" value="<?php echo $date->web_beian; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> ICP备案号</td>
                                    <td>
                                        <input type="text" name="row[web_icp]" value="<?php echo $date->web_icp; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> 版权信息</td>
                                    <td>
                                        <input type="text" name="row[web_copyright]" value="<?php echo $date->web_copyright; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> 邮箱</td>
                                    <td>
                                        <input type="text" name="row[web_email]" value="<?php echo $date->web_email; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>招商电话</td>
                                    <td>
                                        <input type="text" name="row[web_phone]" value="<?php echo $date->web_phone; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ＱＱ</td>
                                    <td>
                                        <input type="text" name="row[web_qq]" value="<?php echo $date->web_qq; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> 百度统计代码</td>
                                    <td>
                                        <input type="text" name="row[web_baidu]" value="<?php echo $date->web_baidu; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> 53客服</td>
                                    <td>
                                        <input type="text" name="row[web_53kf]" value="<?php echo $date->web_53kf; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success btn-embossed"><?php echo __('OK'); ?></button>
                                        <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>




            <div class="tab-pane fade" id="key">
                <div class="widget-body no-padding">
                    <form id="key-form" class="edit-form form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo url('general.web/edit'); ?>">
                        <?php echo token(); ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="15%">标题</th>
                                    <th width="50%">值</th>
                                    <th width="30%">说明</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 网站运行状态</td>
                                    <td>
                                        <?php echo build_radios('row[web_status]', ['1'=>__('开启'), '0'=>__('关闭')],$date->web_status); ?>
                                    </td>
                                    <td>关闭之后，后台可以正常登录</td>
                                </tr>
                                <tr>
                                    <td>关闭原因</td>
                                    <td>
                                        <input type="text" name="row[web_status_reason]" value="<?php echo $date->web_status_reason; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>关闭用户注册</td>
                                    <td>
                                        <?php echo build_radios('row[web_register]', ['1'=>__('开启'), '0'=>__('关闭')],$date->web_register); ?>
                                    </td>
                                    <td>关闭之后，后台可以正常登录</td>
                                </tr>
                                <tr>
                                    <td>关闭用户注册原因</td>
                                    <td>
                                        <input type="text" name="row[web_register_reason]" value="<?php echo $date->web_register_reason; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>IP黑名单</td>
                                    <td>
                                        <textarea name="row[web_black_ip]]" class="form-control" rows="5"><?php echo $date->web_black_ip; ?></textarea>
                                    </td>
                                    <td>(每行一个IP或一个IP段，IP段用|分隔，如192.168.1.2|192.168.2.254)</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success btn-embossed"><?php echo __('OK'); ?></button>
                                        <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>


            <div class="tab-pane fade" id="tdk">
                <div class="widget-body no-padding">
                    <form id="web-form" class="edit-form form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo url('general.web/tdk'); ?>">
                        <?php echo token(); ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="8%">页面</th>
                                    <th width="15%">标题</th>
                                    <th width="30%">关键字</th>
                                    <th width="50%">描述</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if(is_array($tdk) || $tdk instanceof \think\Collection || $tdk instanceof \think\Paginator): $i = 0; $__LIST__ = $tdk;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td> <?php echo $t['name']; ?></td>
                                    <td>
                                        <input type="text" name="row[<?php echo $t['id']; ?>][title]" value="<?php echo $t['title']; ?>" class="form-control" data-rule="" />
                                        <input type="hidden" name="row[<?php echo $t['id']; ?>][id]" value="<?php echo $t['id']; ?>" />
                                    </td>
                                    <td>
                                        <input type="text" name="row[<?php echo $t['id']; ?>][keyword]" value="<?php echo $t['keyword']; ?>" class="form-control" data-rule="" />
                                    </td>
                                    <td>
                                        <textarea type="text" name="row[<?php echo $t['id']; ?>][description]"  class="form-control" data-rule="" /><?php echo $t['description']; ?></textarea>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success btn-embossed"><?php echo __('OK'); ?></button>
                                        <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>