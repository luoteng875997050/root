<?php
/**
 * @filename CommonController.php
 * @author luoteng <luoteng@dodoca.net>
 * @datetime 2016/3/31 11:40
 * @description
 */
namespace Common\Controller;
use Think\Controller;

class HomeController extends Controller {
    public function _initialize(){
        if(!session('?user') && $this->_validRight){
            $this->redirect('/home/user/login/index');
        }
    }
}