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
	/**
	 * @return 
	 * @param 
	 * 
	 */
	public function index2(){
    /*./Application/Template/better/Home/View/index2.html
    * return array('DEFAULT_THEME'=>'better',) 
    * define('TMPL_PATH',APP_PATH.'Template/');
    * modify \Think\View::getThemePath()
    */
		$this->display();
	}
	/**
	 * @param  [type]
	 * @param  [type]
	 * @param  [type]
	 * @return [type]
	 */			
	public function a($a,$b,$c){
		return true;
	}
	/**
	 * [b description]
	 * @param  string $a a
	 * @param  string $b b
	 * @return array    数组
	 * @author xhq <1434970057@qq.com>
	 */
	public function b($a,$b){
		$arr = array();
		return $arr;
	}
}