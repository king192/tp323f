<?php
namespace Home\Controller;
use Think\Controller;

class ExceptionController extends Controller{
	public function index(){
		try{
			E('ExceptionController testttttt');
		}catch(Exception $e){
			echo $e->getMessage();
			echo $e->getLine();
		}
	}
}