<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"/var/www/zs/public/../application/admin/view/general/home/index.html";i:1570521366;s:54:"/var/www/zs/application/admin/view/layout/default.html";i:1569854296;s:51:"/var/www/zs/application/admin/view/common/meta.html";i:1569854296;s:53:"/var/www/zs/application/admin/view/common/script.html";i:1569854296;}*/ ?>
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
                <a href="#key" data-toggle="tab">网站信息</a>
            </li>
        </ul>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">

            <div class="tab-pane fade active in" id="web">
                <div class="widget-body no-padding">
                    <form id="web-form" class="edit-form form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo url('general.home/edit'); ?>">
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
                                    <td> 网站名称</td>
                                    <td>
                                        <input type="text" name="row[web_name]" value="网站名称" class="form-control" data-rule="" />
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
                    <form id="key-form" class="edit-form form-horizontal" role="form" data-toggle="validator" method="POST" action="<?php echo url('general.home/edit'); ?>">
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
                                    <td> 禁止关键词</td>
                                    <td>
                                        <input type="text" name="row[web_name]" value="网站名称" class="form-control" data-rule="" />
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