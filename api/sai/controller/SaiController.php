<?php
namespace api\sai\controller;

use api\user\model\UserFavoriteModel;
use api\user\model\UserLikeModel;
use cmf\controller\RestBaseController;
use api\sai\model\PortalPostModel;
use think\Db;

class SaiController extends RestBaseController{

    public function index()
    {

        $this->success('操作成功！',['title'=>'文章标题']);
    }
}