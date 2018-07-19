<?php

namespace Admin\Controller;
use Think\Controller;

class NodeController extends Controller
{
//--------------------------------列表添加--------------------------------
    public function node_list()
    {
        //实例化CatModel
        $catModel = D('node');
        //调用thinkphp封装好的模板引擎，递归获取数据
        $this->assign('nodelist', $catModel->get);
        //判断，有没有接收过来数据
//        if(IS_POST){
//            //print_r($_POST);
//            //调用Model类的add方法，添加数据
//            if($catModel->add($_POST)){
//                //echo '添加成功';
//                //页面跳转...
//                $this->redirect('admin/cat/catelist',5, '页面跳转中...');
//            }
//        }
//        //调用view模板
        $this->display();
    }
}