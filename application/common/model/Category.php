<?php

namespace app\common\model;

use think\Model;

/**
 * 分类模型
 */
class Category extends Model
{

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    // 追加属性
    protected $append = [
        'type_text',
        'flag_text',
    ];

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $row->save(['weigh' => $row['id']]);
        });
    }

    public function setFlagAttr($value, $data)
    {
        return is_array($value) ? implode(',', $value) : $value;
    }

    /**
     * 读取分类类型
     * @return array
     */
    public static function getTypeList()
    {
        $typeList = config('site.categorytype');
        foreach ($typeList as $k => &$v) {
            $v = __($v);
        }
        return $typeList;
    }

    public function getTypeTextAttr($value, $data)
    {
        // dump($data);
        $value = $value ? $value : $data['type'];
        $list = $this->getTypeList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    public function getFlagList()
    {
        return [
            'index' => __('首页'),
            'navs' => __('首页导航'),
            'menu' => __('菜单'),
            'hot' => __('热门'),
            'recommend' => __('推荐'),
            'top' => __('顶部'),
            'home' => '主页',
        ];
    }

    public function getFlagTextAttr($value, $data)
    {
        $value = $value ? $value : $data['flag'];
        $valueArr = explode(',', $value);
        $list = $this->getFlagList();
        return implode(',', array_intersect_key($list, array_flip($valueArr)));
       
    }

    /**
     * 读取分类列表
     * @param string $type   指定类型
     * @param string $status 指定状态
     * @return array
     */
    public static function getCategoryArray($type = null, $status = null)
    {
        $list = collection(self::where(function ($query) use ($type, $status) {
            if (!is_null($type)) {
                $query->where('type', '=', $type);
            }
            if (!is_null($status)) {
                $query->where('status', '=', $status);
            }
        })->order('weigh', 'desc')->field('id,name,type,flag,pid')->select())->toArray();
        return $list;
    }


    /**
     * 读取分类
     * @param string $type   指定类型
     * @param string $status 指定状态
     * @param string $flag   标志
     * @param int    $limit  查询数量
     * @return array
     */
    public static function getCategoryIndex($type = null, $status = null,$flag=  null,$limit = null)
    {
        $list = collection(self::where(function ($query) use ($type, $status,$flag) {
            if (!is_null($type)) {
                $query->where('type', $type);
            }
            if (!is_null($status)) {
                $query->where('status', $status);
            }
            if (!is_null($flag)) {
                $query->where('flag', 'like',"%".$flag."%");
            }
            $query->where('pid',0);
        })->field('id,name,type,status,flag,pid,image')->order('weigh', 'desc')->limit($limit)->select())->toArray();
        return $list;
    }


}
