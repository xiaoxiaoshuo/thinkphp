<?php
namespace Home\Controller;

use Think\Controller;
use QL\QueryList;


class QyController extends Controller
{
    
    
    public function index(){
        $Stu = M("coupon");
        $biaoti="";
        $this->assign("biaoti", $biaoti);
        $result = $Stu->query("select * from coupon where final_price<=20 and final_price>=9.9");;
        $this->assign("result", $result);
        $this->display();
    }
    public function meirong(){
        $Stu = M("coupon");
        
        $result = $Stu->query("select * from coupon where category=1");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function shenghuo(){
        $Stu = M("coupon");
        
        $result = $Stu->query("select * from coupon where category=2");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function meishi(){
        $Stu = M("coupon");
        
        $result = $Stu->query("select * from coupon where category=3");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function fushi(){
        $Stu = M("coupon");
        
        $result = $Stu->query("select * from coupon where category=4");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function shuma(){
        $Stu = M("coupon");
        
        $result = $Stu->query("select * from coupon where category=5");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function muying(){
        $Stu = M("coupon");
        
        $result = $Stu->query("select * from coupon where category=6");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function qiangquanbang(){
        $Stu = M("coupon");
        $result = $Stu->order('coupon_value desc')->select();
        // $result = $Stu->query("select * from coupon where category=6");;
        $this->assign("result", $result);
        $this->display('index');
    }
    public function youhuibang(){
        $Stu = M("coupon");
        $result = $Stu->order('get_people desc')->select();
        // $result = $Stu->query("select * from coupon where category=6");;
        $this->assign("result", $result);
        $this->display('index');
    }
    
   
 }   
?>