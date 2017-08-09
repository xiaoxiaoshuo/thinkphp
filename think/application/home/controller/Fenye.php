<?php
namespace app\home\controller;
use think\db\Connection;
use think\db\Query;
use think\Controller;



class Fenye extends Controller
{
    
    
    public function index(){
        // $Stu = M("coupon");
        $biaoti="";
        $this->assign("biaoti", $biaoti);

        
            $this->display();

        
        
       
       
    
    }
    public function sx(){
        $Stu = M("coupon");
        $biaoti="";
        $this->assign("biaoti", $biaoti);
        // static $yeshu;
        session('name','s');
        session('yeshu',0);
        if (IS_GET){
            // $fenye=I("sx");
            if (0==I("shang")) {
                # code...
                $yeshu--;
                // U()
                $result = $Stu->page($yeshu,40)->select();
                $this->assign("result", $result);
            }
            if (true) {
                # code...
                // $yeshu=I("xia");
                 static $yeshu;
                 $yeshu=session('yeshu');
                $yeshu++;
                // $a=session('name');
                // echo $a;
                
                echo $yeshu;
                $result = $Stu->page($yeshu,40)->select();
                $this->assign("result", $result);
                // $this->assign("yeshu", $yeshu);
            }
            
        }


        $zongye=$Stu->getField('id',true); 
        $zongye=count($zongye)-count($zongye)%40;
        $zongye=$zongye/40+1;
        $this->assign("zongye", $zongye);

       
        $this->display();
    
    }
   
 }   
?>