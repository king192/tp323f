<?php
namespace Home\Controller;
use Think\Controller;
use Vendor\Test\singleton;

class SingleController extends Controller{
	public function index(){
		$s = singleton::getInstance('1');
		$s1 = singleton::getInstance('2');
		$s->hello();
		dump($s === $s1);
		dump($s->test);//0
		$s1->test = 5;
		dump($s->test);//5
	}
	public function index1(){
		$s = singleton::getInstance('1');
		$s1 = singleton::getInstance('1');
		$s->hello();
		dump($s === $s1);
		dump($s->test);//0
		$s1->test = 5;
		dump($s->test);//5
	}
}