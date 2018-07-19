<?php

//命名空间 php5.3以后版本支持
namespace Model;
use Think\Model;

//User模型model类
//父类：ThinkPHP/Library/Think/Model.class.php
class NodeModel extends Model{
    public function get_tree($p = 0 ,$lv=0)
    {
        //定一个数组变量
        $t = array();
        //循环读取
        foreach ($this->select() as $k => $v) {
            //判断谁的父栏目等于0
            if ($v['n_pid'] == $p) {
                $v['lv'] = $lv;
                //然后把（整条）数据放到 $t
                $t[] = $v;
                //检查   查出一个数据放到$t  +   递归开始
                $t = array_merge($t, $this->get_tree($v['n_id'], $lv + 1));

            }
        }
        return $t;
    }
}