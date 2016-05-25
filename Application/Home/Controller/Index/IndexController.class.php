<?php
namespace Home\Controller\Index;
use Common\Controller\HomeController;
use Think\Controller;
class IndexController extends HomeController {
    public $_validRight = true; //设置不进行权限判断
    public function index(){
        echo "aaa";
    }

    public function login(){
        echo "666";
    }
}