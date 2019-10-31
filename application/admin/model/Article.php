<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Article extends Model
{

    use SoftDelete;

    // 表名
    protected $name = 'article';

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
        return ['hot' => '热门', 'index' => '首页', 'recommend' => '推荐','slide'=>'轮播','img'=>'图片','home'=>'栏目'];
    }

    public function getFlagTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['flag']) ? $data['flag'] : '');
        $valueArr = explode(',', $value);
        $list = $this->getFlagList();
        return implode(',', array_intersect_key($list, array_flip($valueArr)));
    }


    //关联分类表
    public function category()
    {
        return $this->belongsTo('app\common\model\category', 'category_id','id')->setEagerlyType(0);
    }

}
