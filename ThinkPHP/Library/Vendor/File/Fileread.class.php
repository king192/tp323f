<?php
namespace Vendor\File;
// echo 'hellooo';
/*
函数：
opendir
readdir
is_dir
filemtime
closedir
*/
set_time_limit(0);
class Fileread{
	protected $file_num = 0;
	protected $dir_num = 0;
	protected $is_readdir = false;
	function readfile($dir){
		//先判断指定的路径是不是一个文件夹
		if (is_dir($dir) && $file != '.' && $file != '..'){
			if ($dh = opendir($dir)){//打开文件夹
				while (($file = readdir($dh))!== false){//循环读取文件或文件夹
					//文件名的全路径 包含文件名
					$filePath = $dir.$file;

					if(is_dir($filePath) && $file != '.' && $file != '..'){
						$this->dir_num++;
						$filePath = $filePath.'/';
						// echo 'is dir';
						$this->readfile($filePath);
					}elseif(!is_dir($filePath)){
						$this->file_num++;
						$fmt = filemtime($filePath);
						echo "<span style='color:#666'>(".date("Y-m-d H:i:s",$fmt).")</span> ".$filePath."<br/>";
					}

					//获取文件修改时间
					// $fmt = filemtime($filePath);
					// echo "<span style='color:#666'>(".date("Y-m-d H:i:s",$fmt).")</span> ".$filePath."<br/>";
				}
				closedir($dh);
			}
		}
	}
	function get_count(){
		header('content-type:text/html,charset:utf-8');
		echo '共有文件：'.$this->file_num.'<br>';
		echo '公有文件夹'.$this->dir_num.'<br>';
	}
}
// $dir = "E:/UPUPW_APACHE_PHP5.3.28_UP-A3.4/upupw/htdocs/expressjs/";  //要获取的目录
// $file = new Fileread();
// $file->readf($dir);

// 		echo 'total '.$file->file_num.' file<br>';
// 		echo 'total '.$file->dir_num.' dir<br>';
?>