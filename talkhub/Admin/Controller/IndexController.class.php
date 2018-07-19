<?php

namespace Admin\Controller;

use Admin\Extend\Auth;
use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $test = D('role_user');
        $s = $test->select();
        dump($s);
        $this->assign('re', $s);
        $this->display();
    }

    public function test()
    {
//        Auth::createTable();
        print_r(Auth::get());

//        $this->assign('date',);
//        $this->display();

    }
}