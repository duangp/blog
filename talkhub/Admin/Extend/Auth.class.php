<?php

namespace Admin\Extend;

use Think\Db;

class Auth
{
    public static function createTable()
    {
        $sql = "
 CREATE TABLE IF NOT EXISTS t_node (
  `id` smallint(6) unsigned NOT NULL,   
  `parent_id` smallint(6) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `comtroller` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `route` varchar(50) DEFAULT NULL
)DEFAULT CHARSET=utf8;


";
        $mysql = mysqli_connect('127.0.0.1', 'root', 'root', 'talkhub', '3306') or die('连接失败');
        $mysql->query($sql);
        $mysql->close();
    }

    /**
     * 初始化
     */
    public static function set()
    {
        $data = require "authData.php";
        self::processData($data);
    }

    public static function get()
    {
        $db = D('node');
        $data = $db->select();
        $tree = self::get_treearr($data);
        print_r($tree);
        return self::get_tree($tree);

    }

    /**
     * @param $data
     * @param int $parent
     */
    private static function processData(&$data, $parent = 0)
    {
        $db = D('node');
        foreach ($data as $key => $value) {
            $array = array(
                'n_pid' => $parent,
                'name' => $value['name'],
                'model' => $value['model'],
                'action' => $value['action'],
                'controller' => $value['controller'],
                'route' => $value['route']
            );
            $db->add($array);
            $data1 = $db->where("name = '%s'", $array['name'])->getField('n_id');
            self::processData($value['child'], $data1['n_id']);
        }

    }

    function get_tree(&$tree, $parent = 1)
    {
        $space = "-";
//        isset($space) ? $space : $space = "";
        foreach ($tree as $t) {
//            echo $space . $t['name'] . "<br>";
            if ($t['n_pid'] == $parent){
                if (isset($t['child'])) {
                    echo  $t['n_id'];
                    echo $space.$t['name']."<br>";
                    self::get_tree($tree, $t['n_id']);
                }
            }
        }
        $space.="-";
    }

    function get_treearr($items)
    {
        foreach ($items as $item)
            $items[$item['n_pid']]['child'][$item['n_id']] = &$items[$item['n_id']];
        return isset($items[0]['child']) ? $items[0]['child'] : array();
    }


    public static function checkAuth($uid, $Model, $Controller, $Action)
    {

    }
}
