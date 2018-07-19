<?php

namespace Home\Controller;
use Think\Controller;
use Think\Verify;

class TopicController extends Controller
{
    public function topic_list()
    {
        $topic = D('topic');
        $date = $topic->select();
        $this->assign('date',$date);
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

    function topic_detail($tp_id)
    {
        $topic = D('topic');
        $date = $topic->where('tp_id = %d',$tp_id)->select();
        var_dump($date);
        $this->assign('date',$date);
        $this->assign('tp_id',$tp_id);
        $this->display();
    }
}
