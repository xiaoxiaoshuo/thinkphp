<?php
namespace app\home\controller;
use think\db\Connection;
use think\db\Query;
use think\Controller;


// {"success":true,"message":"","result":{"retStatus":0
// use Think\Controller;
// use QL\QueryList;
// use think\Controller;

class Index extends Controller
{
    
    public function index(){
        $Stu = db('coupon');
        $biaoti="搜你想要的宝贝";
        $this->assign("biaoti", $biaoti);
        // // $result = $Stu->order('id desc')->select();
        // $result=db('coupon')->order('id desc')->select();
        //  $this->assign("result", $result);
        $zongye=$Stu->field('id',true); 
        $zongye=count($zongye)-count($zongye)%40;
        $zongye=$zongye/40+1;
       
       

        $this->assign("zongye", $zongye);
       
        //         $this->display();
         $result=db('coupon')->order('id desc')->select();
        if ($result) {
            # code...
            // echo "st$resultring";
        }
        // return json($result);
        $this->assign('result', $result);
        return view('index');

        
    }
    // 删除过期的优惠券
  
   

   
    public function sousuo(){
        if (IS_POST){
             $biaoti=I("s");

        }
        session('kk', $biaoti);
        $Stu = M("coupon");
        $map['title'] = array('like','%'.$biaoti.'%');
        
        // $result = $Stu->query("select * from coupon like title=".$biaoti);;
        $result = $Stu->where($map)->select();
        
        if ($result){
            $this->assign("result", $result);

            
            $this->assign("biaoti", $biaoti);
            $this->display('index');

        }else{
            // $this->muban();
            U('/Home/index/muban');
            $this->redirect('/Home/index/muban');

        }
    }
    public function muban(){
        $biaoti=session('kk');
        $this->assign("biaoti", $biaoti);
        $this->display();
    }
    
}
?>