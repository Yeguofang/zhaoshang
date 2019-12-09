define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function() {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'advert/index' + location.search,
                    add_url: 'advert/add',
                    edit_url: 'advert/edit',
                    del_url: 'advert/del',
                    multi_url: 'advert/multi',
                    table: 'advert',
                }
            });

            var buttons = [
                //修改flag的按钮操操作
                {
                    name: 'edit_flag',
                    text: '修改',
                    title: '修改标志',
                    classname: 'btn btn-xs btn-info btn-click',
                    click:function(row,data){
                        var chk_value =[];//定义一个数组    
                        $("input[name='"+data.id+"_flag']:checked").each(function(){//遍历每一个名字为nodes的复选框，其中选中的执行函数    
                            chk_value.push($(this).val());//将选中的值添加到数组chk_value中    
                        });
                        var groups = chk_value.join(",");
                        $.ajax({
                            type: "post",
                            async: false,
                            url: "advert/flag_edit",
                            //后台数据处理-下面有具体实现
                            data: {flag:groups,id:data.id},
                            success: function (res) {
                                if (res.code == 1) {
                                    layer.msg(res.msg, { icon: 1, time: 1000 });
                                    //关闭当前frame
                                    $(".btn-refresh").trigger("click");
                                } else {
                                    layer.msg(res.msg, { icon: 2, time: 1300 });
                                }
                            }
                        });
                    },
                },
            ];



            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                clickToSelect:false,
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: __('Id'),operate:false},
                        { field: 'title', title: __('Title') ,operate:'LIKE'},
                        { field: 'type', title: __('类型'),formatter:Controller.api.formatter.type,searchList: { "0": '文字', "1": '图片', "2": '友链'}, },
                        { field: 'image', title: __('缩略图'), operate:false,events: Table.api.events.image, formatter: Table.api.formatter.image },
                        { field: 'user.company_name', title: __('用户') ,operate:'LIKE'},
                        { field: 'url', title: __('URL链接') ,operate:'LIKE',formatter: Table.api.formatter.url},
                        { field: 'flag', title: __('标志'),width:300, operate: 'FIND_IN_SET',formatter:Controller.api.formatter.flag,searchList: { "A": 'A区', "B": 'B区', "C": 'C区',"D": 'D区',"E": 'E区'},  },
                        { field: '-', title:'',operate:false,width:50,table: table,events: Table.api.events.operate,buttons:buttons,formatter: Table.api.formatter.buttons},
                        { field: 'weigh', title: __('排序') ,operate:false,formatter:Controller.api.formatter.weigh,},
                        { field: 'switch', title: __('状态'), searchList: { 1: "显示", 0: "隐藏" }, formatter: Table.api.formatter.toggle },
                        { field: 'createtime', title: __('创建时间'), operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'updatetime', title: __('更新时间'), operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate },
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
            table.off('dbl-click-row.bs.table'); //取消双击行之后进入编辑页面
        },
        recyclebin: function() {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    'dragsort_url': ''
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: 'advert/recyclebin' + location.search,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: __('Id') },
                        { field: 'title', title: __('Title'), align: 'left' },
                        {
                            field: 'deletetime',
                            title: __('Deletetime'),
                            operate: 'RANGE',
                            addclass: 'datetimerange',
                            formatter: Table.api.formatter.datetime
                        },
                        {
                            field: 'operate',
                            width: '130px',
                            title: __('Operate'),
                            table: table,
                            events: Table.api.events.operate,
                            butts: [{
                                    name: 'Restore',
                                    text: __('Restore'),
                                    classname: 'btn btn-xs btn-info btn-ajax btn-restoreit',
                                    icon: 'fa fa-rotate-left',
                                    url: 'advert/restore',
                                    refresh: true
                                },
                                {
                                    name: 'Destroy',
                                    text: __('Destroy'),
                                    classname: 'btn btn-xs btn-danger btn-ajax btn-destroyit',
                                    icon: 'fa fa-times',
                                    url: 'advert/destroy',
                                    refresh: true
                                }
                            ],
                            formatter: Table.api.formatter.operate
                        }
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function() {
            Controller.api.bindevent();
        },
        edit: function() {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function() {
                Form.api.bindevent($("form[role=form]"));
            },
            formatter:{  
                type:function (value,row,index) {
                    if(value == 0){
                        return "<label class='label bg-blue'>文字</label>"
                    }else if(value == 1){
                        return "<label class='label bg-red'>图片</label>"
                    }else if(value == 2){
                        return "<label class='label bg-green'>友链</label>"
                    }
                },
                //渲染位置的方法
                flag:function (value,row,index) {
                    if(row.type != 2){
                        var html='';
                        var flag = value.split(','); //将flag字段的值转换为数组
                        $.each(row.flag_data, function(i, item){    //遍历 flag_data 数组
                            var ck = '';
                            var bg ="style='color:green'";
                            for(var v in flag){   //遍历flag数组
                                if(flag[v] == i){   //比较是否相同 相同则选中
                                    ck = "checked='checked'";
                                    bg ="style='color:red'";
                                }
                            }
                            html+= "<input type='checkbox'  value='"+i+"'"+ck+" name='"+row.id+"_flag'><label class='label' "+bg+">"+item+"</label>";
                        });
                        return html;
                    }else{
                        if(row.nofollow == 1){
                            return "<label class='label bg-green'>显示 nofollow</label>"
                        }else{
                            return "<label class='label bg-red'>隐藏 nofollow</label>"
                        }
                    }
                },
                 //权重
                 weigh:function (value,row,index) {
                    return "<input type='text' style='width:50px;text-align: center;'  onBlur='weigh(this.value,this.name)' value='"+value+"' name='"+row.id+"'>";
                }
            },
        }
    };
    return Controller;
});


// 修改权重的方法
function weigh(value,name){
    console.log(name);
    $.ajax({
        type: "post",
        async: false,
        url: "advert/weigh_edit",
        //后台数据处理-下面有具体实现
        data: {id:name,weigh:value},
        success: function (res) {
            if (res.code == 1) {
                layer.msg(res.msg, { icon: 1, time: 1000 });
                //关闭当前frame
                // $(".btn-refresh").trigger("click");
            } else {
                layer.msg(res.msg, { icon: 2, time: 1300 });
            }
        }
    });
}
