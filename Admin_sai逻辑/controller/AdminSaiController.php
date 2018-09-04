<?php
namespace app\sai\controller;
use cmf\controller\AdminBaseController;
use  app\sai\model\SaiModel;

class AdminSaiController extends AdminBaseController{

    public function index(){
        $SaiModel = new SaiModel();
      dump($SaiModel);

        return $this->fetch();
    }

    public function add(){
	    //测试复制会更新多少
        return $this->fetch();
    }

}