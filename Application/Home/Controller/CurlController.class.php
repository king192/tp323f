<?php
namespace Home\Controller;
use Think\Controller;
use \Vendor\Net\curl;

class CurlController extends Controller{
	public function index(){
		$curl = curl_init('http://www.55com.org');
		$res = curl_exec($curl);
		curl_close($curl);
		echo $res;
		echo 'hello';
	}
	public function in1(){
		echo 'hi';
		echo curl::get('https://www.baidu.com');
		echo curl::get('http://www.55com.org');
	}
	public function in2(){
		header('content-type:text/html,charset:utf-8');
		// $url = 'http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName';
		// $data = array('theCityName'=>'北京');
		$data = array('hello'=>'are you ok,ok ok');
		$url = 'http://vechat.suoga.org/post.php';
		echo curl::get1($url,$data);
	}
	public function in3(){
	}
}