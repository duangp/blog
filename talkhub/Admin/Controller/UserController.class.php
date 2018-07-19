<?php

namespace Admin\Controller;

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
                $_POST['u_is_admin'] = 1;
                if ($user->find($_POST)) {
//                    var_dump($_POST);
                    $login_log = D('login_log');
                    $u_id = $user->field('u_id')->where("u_login_name = '%s'",$_POST['u_login_name'])->find();
                    $_POST['u_id'] = $u_id['u_id'];
                    $_POST['ll_ip'] = get_client_ip();
                    $login_log->add($_POST);
                    $this->redirect('Home/Index/index');
                } else {
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

    public function user_add()
    {
        $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        //两个逻辑：展示、收集
        if (!empty($_POST)) {
            //$z = $user -> add($_POST);
            $data = $user->create($_POST); //收集信息、表单自动验证
//            var_dump($_POST);
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

        } else {
//            echo "2";
            $this->display();
        }
    }


    public function user_del($u_id)
    {
        $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        $id = $user->where('deleted = 1 and u_id = %d',$u_id)->find();
        var_dump($id);
        if ($id) {
            echo "该用户已删除";
        } else {
            $_POST['deleted'] = 1;
            $del = $user->where($u_id)->save($_POST);
            if ($del) {
                echo "删除成功!";
            } else {
                echo "删除失败，该条记录不存在";
            }
        }
    }

    public function user_update()
    {
        $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        if (!empty($_POST)) {
            //$z = $user -> add($_POST);
            $data = $user->create($_POST); //收集信息、表单自动验证
//            var_dump($_POST);
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
        } else {
//            echo "2";
            $this->display();
        }
    }

    public function user_list()
    {
        $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        $date = $user->select();
        $this->assign('date',$date);
        $this->display();
    }

    public function user_rec($u_id)
    {
        $user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        $id = $user->where('deleted = 0 and u_id = %d',$u_id)->find();
        var_dump($id);
        if ($id) {
            echo "该用户已恢复";
        } else {
            $_POST['deleted'] = 0;
            $del = $user->where($u_id)->save($_POST);
            if ($del) {
                echo "恢复成功!";
            } else {
                echo "恢复失败，该条记录不存在";
            }
        }
    }
}
