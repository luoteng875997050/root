<?php
namespace Home\Controller\User;

use Common\Controller\HomeController;
use Home\Model\UserModel;
use Think\Controller;

class LoginController extends HomeController
{
    public $_validRight = false; //设置不进行权限判断

    public function index()
    {
        if(!session('?user'))
        {
            $req_url = $_SERVER['REQUEST_URI'];
            $this->assign('req_url', $req_url);
            $this->display('User/Login:index');
            exit;
        }
        //$this->display('User/Login:index');
        redirect('/home/user/center/index');
    }

    public function in()
    {
        $Post = $_POST;
        $username = $Post['username'];
        $password = $Post['password'];
        $user = session('user.' . $username);
        if($user == $username && !empty($username))
        {
            echo "yes";
            die;
        }

        $res = getUserInfo($username, $password);
        if(is_array($res) && !empty($res))
        {
            session('user.' . $username, $username);
            $result = array(
                'code' => 1,
                'msg'  => '登陆成功！'
            );
        }
        else
        {
            $result = array(
                'code' => 0,
                'msg'  => '用户不匹配！'
            );
        }
        $this->ajaxReturn($result);
    }
}