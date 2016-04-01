<?php
namespace Home\Controller;
use Think\Controller;

class TimeController extends Controller{
	public function index(){
		echo time();
	}
}