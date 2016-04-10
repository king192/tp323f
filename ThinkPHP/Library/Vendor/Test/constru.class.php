<?php
namespace Vendor\Test;

/**
*constru::hi()调用的时候不会触发构造函数
*
*/
class constru {
	public function __construct(){
		echo 'hello';
	}
	static public function hi(){
		echo 'hi';
	}
}