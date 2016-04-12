<?php
namespace Home\Controller;
use Think\Controller;

class SuanfaController extends Controller{
	//递归
	public function digui(){
		$n = new \Vendor\Test\Deeploop();
		$n -> deeploop();
	}
	//冒泡
	public function maopao(){
		$m = new \Vendor\Test\Maopao();
		$res = $m -> sort(array(2,5,3,9,6,5,8,7,0));
		dump($res);
	}
}