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
		
	}
}