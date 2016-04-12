<?php
namespace Home\Controller;
use Think\Controller;

class AngularController extends Controller {
	public function index(){
		$this->display();
	}
	public function index1(){
		$this->assign('title','hello');
		$this->display();
	}
}