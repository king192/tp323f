<?php
namespace Think;

class Slog {
	    // 日志级别 从上到下，由低到高
    const EMERG     = 'emergency';  // 严重错误: 导致系统崩溃无法使用
    const ALERT     = 'alert';  // 警戒性错误: 必须被立即修改的错误
    const CRIT      = 'critical';  // 临界值错误: 超过临界值的错误，例如一天24小时，而输入的是25小时这样
    const ERR       = 'error';  // 一般错误: 一般性错误
    const WARN      = 'warning';  // 警告性错误: 需要发出警告的错误
    const NOTICE    = 'notice';  // 通知: 程序可以运行但是还不够完美的错误
    const INFO      = 'info';  // 信息: 程序输出信息
    const DEBUG     = 'debug';  // 调试: 调试信息
    const SQL       = 'SQL';  // SQL：SQL语句 注意只在调试模式开启时有效
    /**
     * 日志写入接口
     * @access public
     * @param string $log 日志信息
     * @param string $destination  写入目标
     * @return void
     */
    static function write($log,$level=self::ERR,$destination='') {
        // $now = date($this->config['log_time_format']);
        if(!empty($destination)){
            $destination = substr($this->config['log_path'],0,-1);
        	\SeasLog::setBasePath($destination);
            // dump($destination);
            // exit;
            // substr(string, start)
        }
            // $destination = substr($this->config['log_path'],0,-1);
        // exit($destination);
        // 自动创建日志目录
        // $log_dir = dirname($destination);
        // if (!is_dir($log_dir)) {
        //     mkdir($log_dir, 0755, true);
        // }        
        // //检测日志文件大小，超过配置大小则备份日志文件重新生成
        // if(is_file($destination) && floor($this->config['log_file_size']) <= filesize($destination) ){
        //     rename($destination,dirname($destination).'/'.time().'-'.basename($destination));
        // }
        // error_log("[{$now}] ".$_SERVER['REMOTE_ADDR'].' '.$_SERVER['REQUEST_URI']."\r\n{$log}\r\n", 3,$destination);
        \SeasLog::Log($level,$_SERVER['REMOTE_ADDR'].' '.$_SERVER['REQUEST_URI']."\r\n{$log}\r\n");
        // \SeasLog::Log($level,"\r\n{$log}\r\n");
    }
}