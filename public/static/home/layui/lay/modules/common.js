layui.define(['jquery','table'], function(exports){ 
        "use strict";
        var $ = layui.jquery;
        var tools= {
                //单一删除
            del_ajax: function (type, url,ids,obj) {
                    console.log("123");
                layer.confirm('真的删除行么', function (index) {
                        $.ajax({
                                type:type,
                                async:false,
                                url:url,
                                data:{ids:ids},
                                success:function(res){
                                        if(res.code==1){
                                                layer.msg(res.msg,{icon:1,time:1000});
                                                setTimeout(function(){
                                                        obj.del();
                                                        layer.close(index);
                                                },1000)
                                        }else{
                                                layer.msg(res.msg,{icon:2,time:1000});
                                        }
                                },error:function(res){
                                        layer.msg('请求异常',{icon:2,time:1000});
                                }
                        })
                });
            },

            //批量删除
            delAll_ajax:function(type, url,table,obj){
                var checkStatus = table.checkStatus(obj.config.id);
                switch (obj.event) {
                        case 'getCheckData':
                                var data = checkStatus.data;
                                var str = '';
                                if (data.length > 0) {
                                        for (var i = 0; i < data.length; i++) {
                                                str += data[i]['id'] + ',';
                                        }
                                        str = str.substr(0, str.length - 1);

                                        layer.confirm("确认要删除 " + str + " 吗？", function (index) {
                                                $.ajax({
                                                        type: type,
                                                        async: false,
                                                        url: url,
                                                        data: { ids: str},
                                                        //后台数据处理-下面有具体实现
                                                        success: function (res) {
                                                                if (res.code == 1) {
                                                                        layer.msg(res.msg, { icon: 1, time: 1000 });
                                                                        setTimeout(function () {
                                                                                xadmin.father_reload();
                                                                        }, 1000)
                                                                } else {
                                                                        layer.msg(res.msg, { icon: 2, time: 1300 });
                                                                }
                                                        }, error: function (res) {
                                                                layer.msg('请求异常', { icon: 2, time: 1300 });
                                                        }
                                                });
                                        });
                                }
                                break;
                }
            }
        };
        //输出接口
        exports('common', tools);
    });