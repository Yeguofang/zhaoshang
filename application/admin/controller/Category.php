<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\admin\model\Project;
use app\common\model\Category as CategoryModel;
use fast\Tree;
use think\db;
/**
 * 分类管理
 *
 * @icon fa fa-list
 * @remark 用于统一管理网站的所有分类,分类可进行无限级分类,分类类型请在常规管理->系统配置->字典配置中添加
 */
class Category extends Backend
{

    /**
     * @var \app\common\model\Category
     */
    protected $model = null;
    protected $categorylist = [];
    protected $noNeedRight = ['selectpage'];

    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('app\common\model\Category');

        $tree = Tree::instance();
        $tree->init(collection($this->model->order('weigh desc,id desc')->select())->toArray(), 'pid');
        $this->categorylist = $tree->getTreeList($tree->getTreeArray(0), 'name');
        $categorydata = [0 => ['type' => 'all', 'name' => __('None')]];
        foreach ($this->categorylist as $k => $v) {
            $categorydata[$v['id']] = $v;
        }
        $typeList = CategoryModel::getTypeList();
        $this->view->assign("flagList", $this->model->getFlagList());
        $this->view->assign("typeList", $typeList);
        $this->view->assign("parentList", $categorydata);
        $this->assignconfig('typeList', $typeList);
    }

    /**
     * 查看
     */
    public function index()
    {
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax()) {
         
            list($where, $sort, $order, $offset, $limit) = $this->buildparams('name');

            $total = db::name('category')
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list_data = db::name('category')
                ->where($where)
                ->order($sort, $order)
                ->limit($offset, $limit)
                ->select();

            $tree = Tree::instance();
            $tree->init($list_data,'pid');
            $list = $tree->getTreeList($tree->getTreeArray(0), 'name');

            for($i=0;$i<count($list);$i++){
                $list[$i]['flag_data'] = $this->model->getFlagList();
            }

            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }



    /**
     * 编辑
     */
    public function edit($ids = null)
    {
        $row = $this->model->get($ids);
        if (!$row) {
            $this->error(__('No Results were found'));
        }
        $adminIds = $this->getDataLimitAdminIds();
        if (is_array($adminIds)) {
            if (!in_array($row[$this->dataLimitField], $adminIds)) {
                $this->error(__('You have no permission'));
            }
        }
        if ($this->request->isPost()) {
            $params = $this->request->post("row/a");
            if ($params) {
                $params = $this->preExcludeFields($params);

                if ($params['pid'] != $row['pid']) {
                    $childrenIds = Tree::instance()->init(collection(\app\common\model\Category::select())->toArray())->getChildrenIds($row['id']);
                    if (in_array($params['pid'], $childrenIds)) {
                        $this->error(__('Can not change the parent to child'));
                    }
                }

                try {
                    //是否采用模型验证
                    if ($this->modelValidate) {
                        $name = str_replace("\\model\\", "\\validate\\", get_class($this->model));
                        $validate = is_bool($this->modelValidate) ? ($this->modelSceneValidate ? $name . '.edit' : $name) : $this->modelValidate;
                        $row->validate($validate);
                    }
                    $result = $row->allowField(true)->save($params);
                    if ($result !== false) {
                        $this->success();
                    } else {
                        $this->error($row->getError());
                    }
                } catch (\think\exception\PDOException $e) {
                    $this->error($e->getMessage());
                } catch (\think\Exception $e) {
                    $this->error($e->getMessage());
                }
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
        $this->view->assign("row", $row);
        return $this->view->fetch();
    }



        //修改位置
        public function flag_edit(){
            $row = $this->request->param();
            $res = db::name('category')->where('id',$row['id'])->update(['flag' => $row['flag']]);
            if($res == 1){
                 return  $this->success('修改成功');
            }
            return $this->error('修改失败');
        }
    


    //删除
    public function del($ids= null){

        if ($ids) {
            $result = Project::where('id','in',$ids)->select();
            $cate = $this->model->where('pid',$ids)->select();
            if($cate != null){
                $this->error('该栏目下存在子类，禁止删除');
            }

            if($result != null){
                $this->error('该栏目下存在项目，禁止删除');
            }

            $pk = $this->model->getPk();
            $adminIds = $this->getDataLimitAdminIds();
            if (is_array($adminIds)) {
                $this->model->where($this->dataLimitField, 'in', $adminIds);
            }
            $list = $this->model->where($pk, 'in', $ids)->select();

            $count = 0;
            Db::startTrans();
            try {
                foreach ($list as $k => $v) {
                    $count += $v->delete();
                }
                Db::commit();
            } catch (PDOException $e) {
                Db::rollback();
                $this->error($e->getMessage());
            } catch (Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
            }
            if ($count) {
                $this->success();
            } else {
                $this->error(__('No rows were deleted'));
            }
        }
    }


    /**
     * Selectpage搜索
     *
     * @internal
     */
    public function selectpage()
    {
        return parent::selectpage();
    }
}
