<?php
namespace Home\Controller;
use Think\Controller;
use Vendor\Test\statics;
use Vendor\Test\constru;

class StaticController extends Controller{
	public function index(){
		$s = new statics();
		$s1 = new statics();
		$s2 = new statics();
		unset($s2);
		echo 'count:'.$s -> getCount();
		echo '<br>st::'.statics::$count;
		statics::$count = 100;
		echo '<br>a::'.$s -> getCount();
	}
	public function index1(){
		$s = new statics();
		$s1 = new statics();
		$s2 = new statics();
		unset($s2);
		unset($s);
		unset($s1);
		$s3 = new statics();
		echo 'count:'.$s3 -> getCount();
	}
	public function get(){
		statics::get();
	}
	public function index3(){
		// new constru();
		constru::hi();
	}
}