<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\Project\zhaoshang\public/../application/admin\view\project\add.html";i:1575801281;s:63:"D:\Project\zhaoshang\application\admin\view\layout\default.html";i:1572765525;s:60:"D:\Project\zhaoshang\application\admin\view\common\meta.html";i:1572765525;s:62:"D:\Project\zhaoshang\application\admin\view\common\script.html";i:1572765525;}*/ ?>
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
        <label class="control-label col-xs-12 col-sm-1">所属公司</label>
        <div class="col-xs-12 col-sm-4">
            <input id="company_id" data-rule="required" data-source="project/company" data-pagination="true" data-page-size="10" data-field="company_name" class="form-control selectpage" name="row[company_id]" type="text" value="">
        </div> 
    </div> 

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-1">所属分类</label>
        <div class="col-xs-12 col-sm-4">
            <select id="c-pid" data-rule="required" class="form-control selectpicker" name="row[category_id]">
                <option value="">请选择</option>
                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$vo): ?>
                <option data-type="<?php echo $vo['type']; ?>" value="<?php echo $vo['id']; ?>" 
                    <?php if(in_array(($vo['pid']), explode(',',"0"))): ?> disabled='disabled' <?php endif; ?>><?php echo $vo['name']; ?>
                </option> 
                <?php endforeach; endif; else: echo "" ;endif; ?> 
            </select>
        </div>
    </div> 
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-1">位置</label>
        <div class="col-xs-12 col-sm-4">
            <?php if(is_array($flagList) || $flagList instanceof \think\Collection || $flagList instanceof \think\Paginator): if( count($flagList)==0 ) : echo "" ;else: foreach($flagList as $key=>$vo): ?>
            <input type='checkbox'  value="<?php echo $key; ?>" name="row[flag][]"> <label><?php echo $vo; ?></label>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-1"><?php echo __('项目名称'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-name" data-rule="required" class="form-control" name="row[name]"
                type="text" >
        </div>
    </div>
                  
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-1"><?php echo __('缩略图'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <div class="input-group">
                <input id="c-image" data-rule="required" class="form-control" size="50" name="row[image]" type="text" >
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-image"
                            data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false"
                            data-preview-id="p-image"><i class="fa fa-upload"></i>
                            <?php echo __('Upload'); ?></button></span>
                    <!-- <span><button type="button" id="fachoose-image" class="btn btn-primary fachoose" data-input-id="c-image"
                            data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i>
                            <?php echo __('Choose'); ?></button></span> -->
                </div>
                <span class="msg-box n-right" for="c-image"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-image"></ul>
        </div>
    </div>


        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-1">投资金额</label>
            <div class="col-xs-12 col-sm-4">
                <select id="c-flag" data-rule="required" class="form-control selectpicker" name="row[price]">
                    <option value="">请选择</option>
                    <option value="1">1-3万 </option>
                    <option value="2">3-5万 </option>
                    <option value="3">5-10万 </option>
                    <option value="4">10万以上 </option>
                </select>
            </div> 
        </div> 
        <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">加盟电话</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-moblie" data-rule="required" class="form-control" name="row[moblie]" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">点击量</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-views"  class="form-control" name="row[views]" value="<?php echo rand(1000,2999) ?>" type="number">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">权重排序</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-weigh" class="form-control" name="row[weigh]" type="number" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">状态</label>
                <div class="col-xs-12 col-sm-4">
                    <div class="radio">
                        <label for="row[switch]-normal">
                        <input id="row[switch]-normal" checked="checked" name="row[switch]" type="radio" value="1"> 正常</label>
                        <label for="row[switch]-hidden">
                        <input id="row[switch]-hidden" name="row[switch]" type="radio" value="0"> 隐藏</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">招商地区</label>
                <div class="col-xs-12 col-sm-4">
                    <div class="form-inline" data-toggle="cxselect" data-selects="parentid,shi">
                        <select class="parentid form-control" name="parentid">
                            <option value="">请选择</option>
                            <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $p['id']; ?>"><?php echo $p['areaname']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <select class="shi form-control" name="shi" data-url="project/shiqu" id="city"></select>
                        <select  class="form-control" multiple="multiple" name="row[city][]"  id="box" >  </select>
                        <button id="del" type="button">删除</button>
                    </div>
                </div>
            </div>

            
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">所在地区</label>
                <div class="col-xs-12 col-sm-4">
                    <div class="form-inline" data-toggle="cxselect" data-selects="parentid,shi">
                        <select class="parentid form-control" name="parentid">
                            <option value="">请选择</option>
                            <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $p['id']; ?>"><?php echo $p['areaname']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <select class="shi form-control" name="row[address]" data-url="project/shiqu"></select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('tdk-标题'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-title" data-rule="required" class="form-control" name="row[title]"
                        type="text" >
                </div>
            </div>
    
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('tdk-关键字'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-keywords"  class="form-control" name="row[keywords]"
                        type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('tdk-描述'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-description"  class="form-control" name="row[description]"
                        type="text" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1"><?php echo __('项目特点'); ?>:</label>
                <div class="col-xs-12 col-sm-4">
                    <input id="c-description" class="form-control" name="row[prouse]"
                        type="text" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">海报</label>
                <div class="col-xs-12 col-sm-11">
                        <script id="poster" name="row[poster]" type="text/plain"></script>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-1">内容</label>
                <div class="col-xs-12 col-sm-11">
                        <script id="container" name="row[content]" type="text/plain"></script>
                </div>
            </div>

            <div class="form-group layer-footer">
                <label class="control-label col-xs-12 col-sm-1"></label>
                <div class="col-xs-12 col-sm-4">
                    <button type="submit" class="btn btn-success btn-embossed"><?php echo __('OK'); ?></button>
                    <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                </div>
            </div>
</form>

<script type="text/javascript" src="/static/home/js/jquery.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>

<script>
$(document).ready(function(){

            UE.getEditor('container');
            UE.getEditor('poster');
            UE.Editor.prototype._bkGetActionUrl = UE.Editor.prototype.getActionUrl;
            UE.Editor.prototype.getActionUrl = function (action) {
                if (action == 'uploadimage' || action == 'uploadscrawl' || action == 'catchimage') {
                    return "<?php echo url('ajax/ue_upload'); ?>";//此处写自定义的图片上传路径
                } else if (action == 'uploadvideo') {
                    return '';
                } else {
                    return this._bkGetActionUrl.call(this, action);
                }
            }   



            var city = document.getElementById("city");//获取ID
            //定义对应的省 市 区数组
            var DomArr = [];//此数组用于存储数据，判断重复
            city.onchange = function()//触发事件
            {
                var name = city.options[city.selectedIndex].innerHTML;//获取选中文本
                var value = city.options[city.selectedIndex].value;//获取选中文本

                var String = "<option selected value="+value+">" + name + "</option>";
                var istrue = false;//是否添加（重复）
                DomArr.forEach(function( val, index ) {
                    if(val==String){
                        istrue=true;
                    }
                });
                if(!istrue){
                    DomArr.push(String);
                    $('#box').append(String);
                }
            }
            
            
            //删除已添加到select的值
             $('#del').click(function () {
                var box = $("#box");
                var name = box.find("option:selected").innerHTML;//获取选中文本
                var value = box.find("option:selected").value;//获取选中文本
                box.find("option:selected").remove();   //删除option
                var String = "<option value="+value+">" + name + "</option>";
                var local = $.inArray(String, DomArr); //根据元素值查找下标，不存在返回-1
                DomArr.splice(local,1);//根据下标删除一个元素   1表示删除一个元素
            })
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