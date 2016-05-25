<?php
/**
 * @filename user.php
 * @author luoteng <luoteng@dodoca.net>
 * @datetime 2016/3/30 19:44
 * @description
 */
function getUserInfo($username, $password)
{
    $userModel = D('User');
    $where = array(
        'username' => $username,
        'password' => $password
    );
    $res = $userModel->where($where)->field('id')->select();
    //echo $userModel->_sql();
    return $res;
}


function user_checklogin()
{
    if(empty($_SESSION['user']))
    {
        if(empty($_COOKIE['username']) || empty($_COOKIE['password']))
        {
            //header("location:/home/user/login/index?req_url=" . $_SERVER['REQUEST_URI']);  //转到登录页面，记录请求的url，登录后跳转过去，用户体验好。
            return $_SERVER['REQUEST_URI'];
        }
        else
        {   //用户选择了记住登录状态
            $user = getUserInfo($_COOKIE['username'], $_COOKIE['password']);   //去取用户的个人资料
            if(empty($user))
            {    //用户名密码不对没到取到信息，转到登录页面
                //header("location:/home/user/login/index?req_url=" . $_SERVER['REQUEST_URI']);
                return $_SERVER['REQUEST_URI'];
            }
            else
            {
                $_SESSION['user'] = $user;   //用户名和密码对了，把用户的个人资料放到session里面
                return true;
            }
        }
    }
}