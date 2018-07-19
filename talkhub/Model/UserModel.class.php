<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/27
 * Time: 9:29
 */
namespace Model;
use Think\Model;

class UserModel extends Model{
    //设置验证规则
    // 是否批处理验证
    protected $patchValidate    =   true;
    // 自动验证定义
    protected $_validate = array(
        //为表单域定义具体验证规则
        //① 验证用户名，非空
        //array(字段名称 表单域name属性值，验证规则，错误提示[，验证条件，附加规则，验证时间])
        array('u_nick_name','require','用户名不能为空',0,'unique'),
        array('u_login_name','','用户名已经被占用',0,'unique'),
        //② 密码，非空
        array('u_login_pwd','require','密码不能为空'),
        //③ 确认密码，非空/与密码保持一致
        array('u_login_pwd1','require','确认密码不能为空'),
        array('u_login_pwd1','u_login_pwd','与密码保持一致',0,'confirm'),
        //④ 邮箱验证,符合邮箱格式
        array('u_email','email','邮箱格式不正确',2),
        //⑤ qq号码，纯数字，位数为5-12位
        array('u_Tel','number','qq号码为数字信息'),
        array('u_Tel','5,12','qq号码长度为5-12位',0,'length'),
        array('u_sex','0,1,2','性别未选择',0,'in')
        //⑥ 学历，必须选择一个
//        array('name','number','学历必须选择一个'),
//        array('name','2,3,4,5','学历必须选择一个',0,'in'),
        //⑦ 爱好，至少选择两个或以上
        // 通过当前模型类的一个方法进行验证
//        array('user_hobby','check_hobby','爱好至少选择两个或以上',1,'callback'),
    );
    //$arg参数 代表被收集到的表单域信息
    function check_hobby($arg){
        if(count($arg)<2){
            return false;
        }
        return true;
    }
}
