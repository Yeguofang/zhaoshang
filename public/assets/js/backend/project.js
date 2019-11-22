define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function($, undefined, Backend, Table, Form) {
   
    var Controller = {
        index: function() {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'project/index' + location.search,
                    add_url: 'project/add',
                    edit_url: 'project/edit',
                    del_url: 'project/del',
                    multi_url: 'project/multi',
                    table: 'project',
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
                                url: "project/flag_edit",
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

             
            Fast.config.openArea = ['90%','90%']; //控制弹窗大小

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                clickToSelect:false,
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: 'Id' ,operate:false},
                        { field: 'category.name', title: '所属分类',operate:false},
                        { field: 'category_id', title: '所属分类',visible:false,operate:'IN',searchList:$.getJSON('/mufan.php/project/search')},
                        { field: 'name', title: '项目名称' ,operate:'LIKE',},
                        { field: 'image', title: '缩略图', operate:false,events: Table.api.events.image, formatter: Table.api.formatter.image },
                        { field: 'user.company_name', title: '公司名称' ,operate:'LIKE'},
                        { field: 'flag', title: '标志',operate: 'FIND_IN_SET',width:200,formatter:Controller.api.formatter.falg,searchList: { "hot": '热门', "index": '首页', "recommend": '推荐',"menu":'菜单',"navs":'导航' }},
                        { field: '-', title:'',operate:false,table: table,events: Table.api.events.operate,buttons:buttons,formatter: Table.api.formatter.buttons},
                        { field: 'switch', title: '状态', searchList: { 1: "显示", 0: "隐藏" }, formatter: Table.api.formatter.toggle },
                        { field: 'weigh', title: '排序' ,operate:false},
                        { field: 'createtime', title: '创建时间', operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'updatetime', title: '更新时间', operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'operate', title: '操作', table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate, },
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
            table.off('dbl-click-row.bs.table'); //取消双击行之后进入编辑页面
        },
  

        recyclebin: function() {
            // 初始化回收站表格参数配置
            Table.api.init({
                extend: {
                    'dragsort_url': ''
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: 'project/recyclebin' + location.search,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: 'Id',operate:false },
                        { field: 'title', title: 'Title',operate:'LIKE', align: 'left' },
                        { field: 'category.name', title: '所属分类',operate:false},
                        { field: 'category_id', title: '所属分类',visible:false,operate:'IN',searchList:$.getJSON('/mufan.php/project/search')},
                        { field: 'flag', title: '标志', searchList: { "hot": '热门', "index": '首页', "recommend": '推荐',"menu":'菜单',"navs":'导航' }, operate: 'FIND_IN_SET', formatter: Table.api.formatter.label },
                        {
                            field: 'deletetime',
                            title: '删除时间',
                            operate: 'RANGE',
                            addclass: 'datetimerange',
                            formatter: Table.api.formatter.datetime
                        },
                        {
                            field: 'operate',
                            width: '130px',
                            title: '操作',
                            table: table,
                            events: Table.api.events.operate,
                            butts: [{
                                    name: '还原',
                                    text: '还原',
                                    classname: 'btn btn-xs btn-info btn-ajax btn-restoreit',
                                    icon: 'fa fa-rotate-left',
                                    url: 'project/restore',
                                    refresh: true
                                },
                                {
                                    name: '永久删除',
                                    text: '永久删除',
                                    classname: 'btn btn-xs btn-danger btn-ajax btn-destroyit',
                                    icon: 'fa fa-times',
                                    url: 'project/destroy',
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
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            },
            formatter:{
                //渲染位置的方法
                falg:function (value,row,index) {
                    var html='';
                    var flag = value.split(',') //将flag字段的值转换为数组
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
                },
            },
        },
    };
  
    return Controller;
});