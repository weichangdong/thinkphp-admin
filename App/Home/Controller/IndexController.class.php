<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('wcd');
    }
    public function wcd()
    {
        echo U('Admin/Linkage/add','keyid=$wcd&parentid=0');
        $this->assign('wcd','hello wcd');
        $this->assign('wcd2',' -by wcd');
        $this->assign('yy',['wcd' => 'man','yy' => 'lady']);
        $this->display();
    }
}