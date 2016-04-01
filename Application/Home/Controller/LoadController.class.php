<?php
namespace Home\Controller;
use Think\Controller;

class LoadController extends Controller{
	public function import(){
		//Vendor/Test/Test.class.php:namespace Vendor\Test;
		import('Vendor.Test.Test');
	}

	public function vendor(){
		
	}
}