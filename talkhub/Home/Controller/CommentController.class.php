<?php

namespace Home\Controller;

use Think\Controller;
use Think\Verify;

class CommentController extends Controller
{
    public function comment_list()
    {
        $user = D('comment');  //必须实例化普通model对象(内部有验证规则)
        $date = $user->select();
        $this->assign('date', $date);
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

    public function comment_add($tp_id)
    {
        $comment = D('comment');  //必须实例化普通model对象(内部有验证规则)
        //两个逻辑：展示、收集
        dump($_POST);
        if (!empty($_POST)) {
            $vrf = new Verify();//verify类下有验证码验证方法
            $_POST['tp_id'] = $tp_id;
            if ($vrf->check($_POST['captcha'])) {
                $data = $comment->create($_POST); //收集信息、表单自动验证
                if ($data) {
                    //验证成功，就会通过$data体现收集到的表单信息
                    //爱好的数组变为字符串
                    //$data['user_hobby'] = implode(',',$data['user_hobby']);
                    $z = $comment->add($data);
                    if ($z) {
                        $this->redirect("Home/Topic/topic_detail/tp_id/$tp_id",5,'发表成功');
                    } else {
                        //验证失败，输出查看错误信息
                        $this->assign('errorInfo', $comment->getError());
                    }
                } else {
                    echo '验证码错误';
                }
//            echo "2";
                $this->display();
            }

        }
    }
}
