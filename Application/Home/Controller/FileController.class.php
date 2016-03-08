<?php
namespace Home\Controller;
use Think\Controller;

class FileController extends Controller{
	public function index(){
		// echo 'hello';
		// import('Vendor.File.Fileread');
		$file = new \Vendor\File\Fileread();
		$file->readfile('./');
		$file->get_count();
		// new \Think\Image();
	}
}