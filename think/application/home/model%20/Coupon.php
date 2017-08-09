<?php
namespace app\index\model;

use think\Model;

class Coupon extends Model
{
	public function quyouhuiquan{
	$user = new Coupon();
    // 查询数据集
    $user->limit(10)->order('id', 'desc')->select();

    return dump($user->toArray()); 
    }
}