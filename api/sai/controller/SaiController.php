<?php
namespace api\sai\controller;

use api\user\model\UserFavoriteModel;
use api\user\model\UserLikeModel;
use cmf\controller\RestBaseController;
use api\sai\model\PortalPostModel;
use api\sai\model\SaiModel;
use think\Db;

class SaiController extends RestBaseController{

    public function index()
    {
       $SaiModel=new SaiModel();
       $data=$SaiModel->find();
       
        $this->success('操作成功！',$data);
    }
}