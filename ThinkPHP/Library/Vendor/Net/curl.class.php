<?php
namespace Vendor\Net;

class curl {
	static function get($url){
		$curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        $res = curl_exec($curl);
        return $res;
	}
	static function get1($url,$data = array()){
		$data = http_build_query($data);
		// exit($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//不立即打印
		curl_setopt($curl, CURLOPT_POST, 1);//post方式
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($data)));
		$res = curl_exec($curl);
		if(!curl_errno($curl)){
			return $res;
		}else{
			exit('curl error:'.curl_error($curl));
		}
	}
}