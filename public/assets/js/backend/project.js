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

              //控制弹窗大小
            Fast.config.openArea = ['90%','90%'];

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: __('Id') ,operate:false},
                        { field: 'category.name', title: __('所属分类'),operate:false},
                        { field: 'category_id', title: __('所属分类'),visible:false,operate:'IN',searchList:$.getJSON('/mufan.php/project/search')},
                        { field: 'flag', title: __('位置'),witdh:200,formatter:Controller.api.formatter.falg,searchList: { "hot": '热门', "index": '首页', "recommend": '推荐',"menu":'菜单',"navs":'导航' }, operate: 'FIND_IN_SET'},//formatter: Table.api.formatter.label
                        { field: 'image', title: __('缩略图'), operate:false,events: Table.api.events.image, formatter: Table.api.formatter.image },
                        { field: 'user.company_name', title: __('公司名称') ,operate:'LIKE'},
                        { field: 'name', title: __('项目名称') ,operate:'LIKE'},
                        { field: 'createtime', title: __('创建时间'), operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'updatetime', title: __('更新时间'), operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'weigh', title: __('排序') ,operate:false},
                        { field: 'switch', title: __('状态'), searchList: { 1: "显示", 0: "隐藏" }, formatter: Table.api.formatter.toggle },
                        { field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate }
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
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
                        { field: 'id', title: __('Id'),operate:false },
                        { field: 'title', title: __('Title'),operate:'LIKE', align: 'left' },
                        { field: 'category.name', title: __('所属分类'),operate:false},
                        { field: 'category_id', title: __('所属分类'),visible:false,operate:'IN',searchList:$.getJSON('/mufan.php/project/search')},
                        { field: 'flag', title: __('标志'), searchList: { "hot": '热门', "index": '首页', "recommend": '推荐',"menu":'菜单',"navs":'导航' }, operate: 'FIND_IN_SET', formatter: Table.api.formatter.label },
                        {
                            field: 'deletetime',
                            title: __('删除时间'),
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
                                    url: 'project/restore',
                                    refresh: true
                                },
                                {
                                    name: 'Destroy',
                                    text: __('Destroy'),
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
                falg:function (value,row,index) {
                    var html ="<form id='edit-form' class='form-horizontal' role='form' method='POST' action='/mufan.php/project/flag_edit'>"; //html内容
                    var flag = value.split(','); //将flag字段的值转换为数组
                    $.each(row.flag_data, function(i, item){    //遍历 flag_data 数组
                        var ck = '';
                          for(var v in flag){   //遍历flag数组
                            if(flag[v] == i){   //比较是否相同 相同则选中
                                ck = "checked='checked'";
                            }
                          }
                            html+= "<input type='checkbox' value='"+i+"'"+ck+" name='flag[]'>"+item+" ";
                    });

                    html+=" <button type='submit' class='btn btn-success btn-embossed'>修改</button></form>";
                     return html;
                },
            },
        },
    };
    return Controller;
});