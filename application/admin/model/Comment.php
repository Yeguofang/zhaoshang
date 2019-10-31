<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Comment extends Model
{

    use SoftDelete;
    // 表名
    protected $name = 'comment';

    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $deleteTime = 'deletetime';
    protected $updateTime = 'updatetime';


    //关联项目表
    public function article()
    {
        return $this->belongsTo('article','aid', 'id')->setEagerlyType(0);
    }

}
