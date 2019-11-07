define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function() {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'article/index' + location.search,
                    add_url: 'article/add',
                    edit_url: 'article/edit',
                    del_url: 'article/del',
                    // multi_url: 'article/multi',
                    table: 'article',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: __('Id') ,operate: false },
                        { field: 'category.name', title: __('所属分类'),operate:false},
                        { field: 'category_id', title: __('所属分类'),visible:false,operate:'IN',searchList:$.getJSON('/mufan.php/article/search')},
                        { field: 'flag', title: __('标志'), searchList: { "hot": '热门', "index": '首页', "recommend": '推荐' ,"slide":'轮播',"img":'图片',"home":'主页'}, operate: 'FIND_IN_SET', formatter: Table.api.formatter.label },
                        { field: 'image', title: __('缩略图'), operate: false ,events: Table.api.events.image, formatter: Table.api.formatter.image },
                        { field: 'title', title: __('标题'),operate:'LIKE' },   
                        { field: 'views', title: __('浏览量'),operate: false },
                        { field: 'createtime', title: __('创建时间'), operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'updatetime', title: __('更新时间'), operate: 'RANGE', addclass: 'datetimerange', formatter: Table.api.formatter.datetime },
                        { field: 'weigh', title: __('排序'),operate: false  },
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
                url: 'article/recyclebin' + location.search,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        { checkbox: true },
                        { field: 'id', title: __('Id') ,operate:false},
                        { field: 'category.name', title: __('所属分类'),operate:false},
                        { field: 'category_id', title: __('所属分类'),visible:false,operate:'IN',searchList:$.getJSON('/mufan.php/article/search')},
                        { field: 'title', title: __('Title'),operate:'LIKE', align: 'left' },
                        { field: 'flag', title: __('标志'), searchList: { "hot": '热门', "index": '首页', "recommend": '推荐' ,"slide":'轮播',"img":'图片',"home":'主页'}, operate: 'FIND_IN_SET', formatter: Table.api.formatter.label },
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
                            buttons: [{
                                    name: 'Restore',
                                    text: __('Restore'),
                                    classname: 'btn btn-xs btn-info btn-ajax btn-restoreit',
                                    icon: 'fa fa-rotate-left',
                                    url: 'article/restore',
                                    refresh: true
                                },
                                {
                                    name: 'Destroy',
                                    text: __('Destroy'),
                                    classname: 'btn btn-xs btn-danger btn-ajax btn-destroyit',
                                    icon: 'fa fa-times',
                                    url: 'article/destroy',
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