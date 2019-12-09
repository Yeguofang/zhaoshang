/*
 * @Descripttion: 
 * @Author: Jason
 * @Date: 2019-11-10 12:21:54
 * @LastEditTime: 2019-11-27 16:25:24
 */
define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'category/index',
                    add_url: 'category/add',
                    edit_url: 'category/edit',
                    del_url: 'category/del',
                    multi_url: 'category/multi',
                    // dragsort_url: 'ajax/weigh',
                    table: 'category',
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
                            url: "category/flag_edit",
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
            var tableOptions = {
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                escape: false,
                pk: 'id',
                sortName: 'id',
                pagination: false,
                clickToSelect:false,
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id'),operate: false,},
                        {field: 'type', title: __('Type'),searchList:{"project": __('项目'),'article' : __('文章')},formatter: Table.api.formatter.normal},
                        {field: 'image', title: __('Image'), operate: false, events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'name', title: __('Name'),width:200,operate: 'LIKE',align: 'left'},
                        {field: 'flag', title: __('位置'), operate: 'FIND_IN_SET',width:420, formatter:Controller.api.formatter.flag,searchList:{'index': __('首页'),'navs' : __('首页导航'), 'menu' : __('菜单'),'hot':__('热门'),'recommend' : __('推荐'),'top' : __('顶部'),'home' : __('主页')}},
                        { field: '-', title:'',operate:false,width:50,table: table,events: Table.api.events.operate,buttons:buttons,formatter: Table.api.formatter.buttons},
                        {field: 'weigh', title: __('Weigh'),operate: false,},
                        {field: 'status', title: __('Status'), searchList:{"normal": __('正常'),'hidden' : __('隐藏')}, formatter: Table.api.formatter.status},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            };
            // 初始化表格
            table.bootstrapTable(tableOptions);

            // 为表格绑定事件
            Table.api.bindevent(table);
            table.off('dbl-click-row.bs.table'); //取消双击行之后进入编辑页面

            //绑定TAB事件
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                // var options = table.bootstrapTable(tableOptions);
                var typeStr = $(this).attr("href").replace('#', '');
                var options = table.bootstrapTable('getOptions');
                options.pageNumber = 1;
                options.queryParams = function (params) {
                    // params.filter = JSON.stringify({type: typeStr});
                    params.type = typeStr;

                    return params;
                };
                table.bootstrapTable('refresh', {});
                return false;

            });

            //必须默认触发shown.bs.tab事件
            // $('ul.nav-tabs li.active a[data-toggle="tab"]').trigger("shown.bs.tab");

        },
        add: function () {
            Controller.api.bindevent();
            setTimeout(function () {
                $("#c-type").trigger("change");
            }, 100);
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                $(document).on("change", "#c-type", function () {
                    $("#c-pid option[data-type='all']").prop("selected", true);
                    $("#c-pid option").removeClass("hide");
                    $("#c-pid option[data-type!='" + $(this).val() + "'][data-type!='all']").addClass("hide");
                    $("#c-pid").data("selectpicker") && $("#c-pid").selectpicker("refresh");
                });
                Form.api.bindevent($("form[role=form]"));
            },
            formatter:{
                //渲染位置的方法
                flag:function (value,row,index) {
                    var html='';
                    var flag = value.split(','); //将flag字段的值转换为数组
                    $.each(row.flag_data, function(i, item){    //遍历 flag_data 数组
                        var ck = '';
                        var bg ="style='color:green'";
                          for(var v in flag){   //遍历flag数组
                            if(flag[v] == i){   //比较是否相同 相同则选中
                                ck = "checked='checked' "; //选中
                                bg ="style='color:red'";    //颜色
                            }
                          }
                        html+= "<input type='checkbox'  value='"+i+"'"+ck+" name='"+row.id+"_flag'><label class='label' "+bg+">"+item+"</label>";
                    });
                    return html;
                },
            },
        },
    };
    return Controller;
});