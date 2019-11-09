<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Advert extends Model
{

    use SoftDelete;

    // 表名
    protected $name = 'advert';

    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = 'deletetime';


    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    public function setFlagAttr($value, $data)
    {
        return is_array($value) ? implode(',', $value) : $value;
    }

    public function getFlagList()
    {
        return ['S' =>'首页-轮播','A' => __('首页-A区'), 'B' => __('首页-B区'),'C' => __('首页-C区'), 'D' => __('首页-D区'),'E' => __('首页-E区'),];
    }

    public function getFlagTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['flag']) ? $data['flag'] : '');
        $valueArr = explode(',', $value);
        $list = $this->getFlagList();
        return implode(',', array_intersect_key($list, array_flip($valueArr)));
    }



    //关联user表
    public function user()
    {
        return $this->belongsTo('user', 'company_id','id')->setEagerlyType(0);
    }
}
