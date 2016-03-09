<?php
namespace Home\Controller;
use Think\Controller;

class FileController extends Controller{
	public function index(){
		// echo 'hello';
		// import('Vendor.File.Fileread');
		$time = time();
		$mem = memory_get_usage();
		$file = new \Vendor\File\Fileread();
		$file->readfile('./');
		$file->get_count();
		$file1 = new \Vendor\File\Fileread();
		$file1->readfile('./');
		$file1->get_count();
		$file2 = new \Vendor\File\Fileread();
		$file2->readfile('./');
		$file2->get_count();
		$mem1 = memory_get_usage();
		$time1 = time();
		echo '<br>内存：'.($mem1-$mem)/1024;
		echo 'M';
		echo '<br>时间：'.($time1 - $time);
		echo 's';
		// new \Think\Image();
	}
	public function index1(){
		// echo 'hello';
		// import('Vendor.File.Fileread');
		$time = time();
		$mem = memory_get_usage();
		\Vendor\File\Fileread1::readfile('./');
		\Vendor\File\Fileread1::get_count();
		\Vendor\File\Fileread1::readfile('./');
		\Vendor\File\Fileread1::get_count();
		\Vendor\File\Fileread1::readfile('./');
		\Vendor\File\Fileread1::get_count();
		$mem1 = memory_get_usage();
		$time1 = time();
		echo '<br>内存：'.($mem1-$mem)/1024;
		echo 'M';
		echo '<br>时间：'.($time1 - $time);
		echo 's';
		// new \Think\Image();
	}
	public function index2(){
		// echo 'hello';
		// import('Vendor.File.Fileread');
		$time = time();
		$mem = memory_get_usage();
		$file = \Vendor\File\Fileread2::getInstance();
		$file->readfile('./');
		$file->get_count();
		$file1 = \Vendor\File\Fileread2::getInstance();
		$file1->readfile('./');
		$file1->get_count();
		$file2 = \Vendor\File\Fileread2::getInstance();
		$file2->readfile('./');
		$file2->get_count();
		$mem1 = memory_get_usage();
		$time1 = time();
		echo '<br>内存：'.($mem1-$mem)/1024;
		echo 'M';
		echo '<br>时间：'.($time1 - $time);
		echo 's';
		// new \Think\Image();
	}
}