<?php

namespace app\common\model;

use think\Model;
use traits\model\SoftDelete;

class Message extends Model
{

    use SoftDelete;
    // 表名
    protected $name = 'message';

    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $deleteTime = 'deletetime';
    protected $updateTime = 'updatetime';


    //关联项目表
    public function project()
    {
        return $this->belongsTo('project', 'pid')->setEagerlyType(0);
    }

}
