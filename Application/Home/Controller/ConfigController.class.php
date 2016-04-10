<?php
namespace Home\Controller;
use Think\Controller;

class ConfigController extends Controller{
	public function index(){
		//Vendor/Test/Test.class.php:namespace Vendor\Test;
		G('a');
		dump(C('test.hi.a'));
		dump(G('a','end',6));
		dump(G('a','end','m'));
	}
}