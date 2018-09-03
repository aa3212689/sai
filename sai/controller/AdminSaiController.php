<?php
namespace app\sai\controller;
use cmf\controller\AdminBaseController;

class AdminSaiController extends AdminBaseController{

    public function index(){
        return $this->fetch();
    }

    public function add(){
	    //测试复制会更新多少
        return $this->fetch();
    }

}