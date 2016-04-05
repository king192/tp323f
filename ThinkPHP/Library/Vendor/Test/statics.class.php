<?php
namespace Vendor\Test;

/**
* 静态类方法属性不能被实例化，在内存中只用一份，
* 在php中，静态类方法属性全局共享，直到一次请求结束
*/
class statics{
	
	public static $count = 0;//记录类被实例化次数
	function __construct($argument){
		self::$count++;
	}
	public function getCount(){
		return self::$count;
	}
	public static function get(){
		// $this->hello();//php5种静态方法调用非静态方法会把非静态方法转化为静态方法
		// 所以应该这样写
		self::hello();
	}
	public function hello(){
		echo 'hello';
	}
	function __destruct(){

	}

}