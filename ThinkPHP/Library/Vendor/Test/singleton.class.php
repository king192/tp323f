<?php
namespace Vendor\Test;
/*
*单例模式比静态方法更灵活
*/
class singleton {
	public $test = 0;
	private static $myself = null;
	private function __construct(){}
	/*
	*$config string 灵活的地方
	*/
	public static function getInstance($config = '1'){
		if(self::$myself[$config] === null){
			self::$myself[$config] = new self;
		}
		return self::$myself[$config];
	}
	public function hello(){
		echo 'hello';
	}

}