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

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: __('Id') ,operate:false},
                        { field: 'admin_id', title: __('用户'),operate:false },
                        { field: 'category_id', title: __('所属分类') },
                        { field: 'flag', title: __('标志'), searchList: { "hot": '热门', "index": '首页', "recommend": '推荐',"menu":'菜单',"navs":'导航' }, operate: 'FIND_IN_SET', formatter: Table.api.formatter.label },
                        { field: 'image', title: __('缩略图'), operate:false,events: Table.api.events.image, formatter: Table.api.formatter.image },
                        { field: 'name', title: __('项目名称') ,operate:false},
                        { field: 'city', title: __('招商地区') ,operate: false},
                        { field: 'price', title: __('投资金额'),operate:false},
                        { field: 'views', title: __('浏览量') ,operate: false},
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
            // 初始化表格参数配置
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
            bindevent: function() {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});