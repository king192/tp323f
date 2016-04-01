<?php
namespace Home\Controller;
use Think\Controller;
use \Think\Logs;
class IndexController extends Controller {
    public function index(){
        echo base64_encode('";alert(true);//');
    }
    public function location(){
    	var_dump($_SERVER);
		$ip = get_client_ip();
		$Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
		$area = $Ip->getlocation('203.34.5.66'); // 获取某个IP地址所在的位置
		echo $ip;
		var_dump($area);
		var_dump($IP);
    }
    public function m(){ 
    	echo phpinfo();
    }
    public function logt(){
        G('a');
        $i = 100000;
        while ($i--) {
            // \Think\Log::write('thinkphp log test');
            \Think\Log::write('thinkphp log test',\Think\Log::ERR,'Seaslog');
        }
        echo G('a','end',6)."<br>\n";
        echo G('a','end','m');
    }
    public function logs(){
        G('a');
        $i = 100000;
        while ($i--) {
            \Think\Slog::write('thinkphp log test');
        }
        echo G('a','end',6)."<br>\n";
        echo G('a','end','m');
    }
    public function logs1(){
        Logs::setLogger('Home');
        Logs::error('module');
    }
    public function ana(){
        $info = Logs::analyzerDetail('error');
        // $info = \SeasLog::analyzerDetail('error');
        dump($info);
    }
}