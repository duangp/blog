<?php

namespace Home\Controller;

use Think\Controller;
use Think\Verify;

class UserController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $vrf = new Verify();//verify类下有验证码验证方法
            if ($vrf->check($_POST['captcha'])) {
                $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
                $_POST['u_login_pwd'] = md5($_POST['u_login_pwd']);//密码md5加密
                if($user->find($_POST)){
//                    var_dump($_POST);
                    $this->redirect('Home/Index/index');
                }else{
                    echo "登录失败，检查用户名密码";
                }
            } else {
                echo '验证码错误';
            }
        }
        $this->display();
    }

    public function verify_img()
    {
        $conf = array(
            'imageH' => 20,
            'imageW' => 80,
            'fontSize' => 11,
            'length' => 4,
            'fontttf' => '4.ttf',
        );
        $img = new Verify($conf);
        $img->entry();
    }


    function register()
    {
        $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        //两个逻辑：展示、收集
        if (!empty($_POST)) {
            //$z = $user -> add($_POST);
            $vrf = new Verify();//verify类下有验证码验证方法
            if ($vrf->check($_POST['captcha'])) {
                $data = $user->create($_POST); //收集信息、表单自动验证
                var_dump($_POST);
                if ($data) {
                    //验证成功，就会通过$data体现收集到的表单信息
                    //爱好的数组变为字符串
                    //$data['user_hobby'] = implode(',',$data['user_hobby']);
                    $_POST['u_login_pwd'] = md5($_POST['u_login_pwd']);//密码md5加密
                    $z = $user->add($data);
                    if ($z)
                        $this->redirect('Home/Index/index');
                } else {
                    //验证失败，输出查看错误信息
                    $s = $user->getError();
                    dump($s);
                    $this->assign('errorInfo', $user->getError());
                }
            }else{
                echo '验证码错误';
            }

        } else {
//            echo "2";
            $this->display();
        }

    }
}
