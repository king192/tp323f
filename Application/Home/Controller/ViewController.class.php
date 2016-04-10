<?php
namespace Home\Controller;
use Think\Controller;

class ViewController extends Controller{
	public function index(){
		$this->display();
		// echo 'fjfjfjfjfjfj';
	}
	public function index1(){
		$view = \Think\Think::instance('Think\View');
		$view->display();
	}

	public function index2(){
		$this->display();
	}
}