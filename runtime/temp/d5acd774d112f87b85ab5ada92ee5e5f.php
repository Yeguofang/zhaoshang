<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"/var/www/zs/public/../application/index/view/menber/project/edit.html";i:1572490000;s:58:"/var/www/zs/application/index/view/menber/common/head.html";i:1571803846;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
<title>用户中心</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="/static/home/x-admin/css/font.css">
<link rel="stylesheet" href="/static/home/x-admin/css/xadmin.css">
<script src="/static/home/layui/layui.js" charset="utf-8"></script>
<link rel="stylesheet" href="/static/home/layui/css/layui.css"  media="all">
<script src="/static/home/x-admin/lib/layui/layui.js" charset="utf-8"></script>
<script src="/static/home/js/jquery.js" charset="utf-8"></script>
<script type="text/javascript" src="/static/home/x-admin/js/xadmin.js"></script>
<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!-- [if lt IE 9]> -->
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<!-- <![endif] -->
<script>
    // 是否开启刷新记忆tab功能
    var is_remember = false;
</script>
</head>

<body>
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form">


                <div class="layui-form-item">
                    <label for="tdk_key" class="layui-form-label">
                        <span class="x-red">*</span>所属分类</label>
                    <div class="layui-input-inline">
                        <select name="category_id" 　lay-verify="required">
                            <?php foreach($cate_one as $key=>$one): ?>
                            <optgroup label="<?php echo $one['name']; ?>">
                                if condition="$one.two != null"}
                                <?php foreach($one['two'] as $v): ?>
                                <option value="<?php echo $v['id']; ?>" <?php if(in_array(($data['category_id']), is_array($v['id'])?$v['id']:explode(',',$v['id']))): ?> selected <?php endif; ?>><?php echo $v['name']; ?></option>
                                <?php endforeach; ?>
                                {/if}
                            </optgroup>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                        <label for="name" class="layui-form-label">
                            <span class="x-red">*</span>项目名称</label>
                        <div class="layui-input-inline">
                            <input type="text" id="name"" name="name" value="<?php echo $data['name']; ?>" autocomplete="off" class="layui-input"></div>
                    </div>

                    <div class="layui-form-item">
                            <label for="phone" class="layui-form-label">
                                <span class="x-red">*</span>加盟手机</label>
                            <div class="layui-input-inline">
                                <input type="text" id="phone"" name="phone"　 value="<?php echo $data['phone']; ?>"  autocomplete="off" class="layui-input"></div>
                        </div>
    
                        <div class="layui-form-item">
                                <label for="moblie" class="layui-form-label">
                                    <span class="x-red">*</span>加盟电话</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="moblie"" name="moblie" 　 value="<?php echo $data['moblie']; ?>" autocomplete="off" class="layui-input"></div>
                            </div>
          

                <div class="layui-form-item">
                    <label class="layui-form-label">投资金额</label>
                    <div class="layui-input-inline">
                        <select name="price">
                            <option value="1" <?php if(in_array(($data['price']), explode(',',"1"))): ?> selected <?php endif; ?>>1-3万</option>
                            <option value="2" <?php if(in_array(($data['price']), explode(',',"2"))): ?> selected <?php endif; ?>>3-5万</option>
                            <option value="3" <?php if(in_array(($data['price']), explode(',',"3"))): ?> selected <?php endif; ?>>5-10万</option>
                            <option value="4" <?php if(in_array(($data['price']), explode(',',"4"))): ?> selected <?php endif; ?>>10万以上</option>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">联动选择框</label>
                    <div class="layui-input-inline">
                      <select  lay-filter="area">
                        <?php if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                        <option value="0">全国</option>
                        <option value="<?php echo $a['id']; ?>"><?php echo $a['areaname']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </div>
                    <div class="layui-input-inline">
                      <select  lay-filter="city" id="city">
                      </select>
                    </div>
                    <div class="layui-input-inline">
                        <select multiple="multiple"  lay-ignore  id="box" style="width:100px;"  >
                            <?php if(is_array($data['city']) || $data['city'] instanceof \think\Collection || $data['city'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['city'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $c['id']; ?>" ><?php echo $c['areaname']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <button id="del" type="button">
                            删除
                        </button>
                    </div>
                  </div>


                <div class="layui-form-item">
                    <label class="layui-form-label">缩略图</label>
                    <div class="layui-input-line">
                        <div class="layui-upload">
                            <button type="button" class="layui-btn" id="test1">上传图片</button>
                            <div class="layui-upload-list">
                                <img class="layui-upload-img" src="<?php echo $data['image']; ?>" id="demo1">
                                <input type="hidden" name="image" id="image">
                                <p id="demoText"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="prouse" class="layui-form-label">
                        <span class="x-red">*</span>项目特点</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" name="prouse"     class="layui-textarea"><?php echo $data['prouse']; ?></textarea>
                    </div>
                </div>

                <div class="layui-form-item">
                        <label for="title" class="layui-form-label">
                            <span class="x-red">*</span>tdk-标题</label>
                        <div class="layui-input-block">
                            <input type="text" id="title" name="title" 　lay-verify="title" width="300px" 　 value="<?php echo $data['title']; ?>"autocomplete="off"
                                class="layui-input"></div>
                    </div>

                <div class="layui-form-item">
                    <label for="keywords" class="layui-form-label">
                        <span class="x-red">*</span>tdk-关键词</label>
                    <div class="layui-input-block">
                        <input type="text" id="keywords" name="keywords" autocomplete="off"   value="<?php echo $data['keywords']; ?>" class="layui-input"></div>
                </div>

                <div class="layui-form-item">
                    <label for="description" class="layui-form-label">
                        <span class="x-red">*</span>tdk-描述</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" name="description" class="layui-textarea"><?php echo $data['description']; ?></textarea>
                    </div>
                </div>

                <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">内容</label>
                    <div class="layui-input-block">
                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="content" type="text/plain"> <?php echo $data['content']; ?></script>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label"></label>
                    <button class="layui-btn" lay-filter="edit" lay-submit="">提交</button></div>
            </form>
        </div>
    </div>

    <!-- 配置文件 -->
    <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>

    <script>
        layui.use(['form', 'layer', 'upload'],
            function () {
                $ = layui.jquery;
                var form = layui.form,
                    layer = layui.layer,
                    upload = layui.upload;

                //自定义验证规则
                form.verify({
                    title: function (value) {
                        if (value.length == 0) {
                            return '标题不能空！';
                        }
                    },
                    cate: function (value) {
                        if (value.length == 0) {
                            return '分类不能空！';
                        }
                    },
                });




                //普通图片上传
                var uploadInst = upload.render({
                    elem: '#test1'
                    , url: "<?php echo url('ajax/upload'); ?>"
                    , before: function (obj) {
                        //预读本地文件示例，不支持ie8
                        obj.preview(function (index, file, result) {
                            $('#demo1').attr('src', result); //图片链接（base64）
                        });
                    }
                    , done: function (res) {
                        //上传成功
                        if (res.code ==1) {
                            $('#image').val(res.data.url);
                            layer.msg(res.msg, { icon: 1, time: 1000 });
                        }
                        //上传成功
                    }
                    , error: function () {
                        //演示失败状态，并实现重传
                        var demoText = $('#demoText');
                        demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                        demoText.find('.demo-reload').on('click', function () {
                            uploadInst.upload();
                        });
                    }
                });



                // 实例化编辑器 
                var editor = UE.getEditor('container');

                //监听提交
                form.on('submit(edit)', function (data) {
                    //文本编辑器内容
                    data.field.content = editor.getContent();
                    if (data.field.content == '') {
                        layer.msg('文章内容不能为空！', { icon: 2, time: 1300 });
                        return false;
                    }

                    data.field.city =[];
                    var obj= $('#box').children(); //获取select
                    console.log(obj);
                    for(var i=0;i<obj.length;i++){
                        data.field.city.push(obj[i].value);// 收集选中项
                    }

                    console.log(data.field);
                    $.ajax({
                        type: "post",
                        async: false,
                        url: "<?php echo url('menber/project/edit'); ?>/<?php echo $data['id']; ?>",
                        //后台数据处理-下面有具体实现
                        data: data.field,
                        success: function (res) {
                            console.log(res);
                            if (res.code == 1) {
                                layer.msg(res.msg, { icon: 1, time: 1000 });
                                //关闭当前frame
                                setTimeout(function () {
                                    xadmin.close();
                                }, 1000)
                            } else {
                                layer.msg(res.msg, { icon: 2, time: 1300 });
                            }
                        }
                    });
                    return false;
                });

                   //定义对应的省 市 区数组
            var DomArr = [];//此数组用于存储数据，判断重复
            form.on('select(area)', function (data) {
                $.ajax({
                    type: "post",
                    async: false,
                    url: "<?php echo url('menber/project/add'); ?>?tid="+data.value,
                    //后台数据处理-下面有具体实现
                    data: data.field,
                    success: function (res) {
                        $("#city").empty();
                        //遍历省级的数组，将每个内容插入下拉框内
                        if(res.length == 0){
                            $('#city').append("<option value='1'>全国各地</option>");
                        }else{
                            for (var i = 0; i < res.length; i++) {
                                $('#city').append('<option value='+res[i]['id']+'>' + res[i]['areaname'] + '</option>');
                            }
                        }   
                        form.render();
                    }
                });

            });



            //把选中的城市添加到select
            form.on('select(city)', function(data){
                var name = data.elem[data.elem.selectedIndex].text;
                var String = "<option value="+data.value+" >" + name + "</option>";
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
            })
            
            //点击已选中值的时候为其添加一个样式标示，由于后面删除
            $(document).on('click',"#box option",function(){
                $(this).attr('style','background-color:aqua;');
                $(this).siblings().attr('style','background-color:#ffffff;');
            })
            //删除已添加到select的值
            $('#del').click(function () {
                var s = $('option[style="background-color:aqua;"]').html();
                var child = $('#box').children();
                console.log(child);
                var Sring = "<option>" + s + "</option>";
                for(var i=0;i<child.length;i++){
                    if(child[i].innerHTML==s){
                        console.log(child[i].innerHTML);
                        $($("#box").find("option")[i].remove());
                        for (var i=0;i<DomArr.length;i++) {
                            if(DomArr[i]==Sring){
                                DomArr.splice(i,1);
                            }
                        }
                    }
                }
                document.getElementById("city").options.selectedIndex = 0; //回到初始状态
            })

            });

    </script>
</body>

</html>