<?php
namespace Home\Controller;
use Think\Controller;

class ImportController extends Controller{
	public function import(){
		/*
		import载入文件时文件不需要写命名空间，实例化的时候在类前加\
		*/
		import('Vendor.Test.Test');
		// \Vendor\Test\Test::h();
		$t = new \Test();
		$t->h();
	}
	public function vendor(){
		
	}

	public function xhprof(){
		import('Vendor.Xhprof.Util.Xhprof_lib');
		import('Vendor.Xhprof.Util.Xhprof_runs');
		$xhprof_runs = new \XHProfRuns_Default();
		// new \hello();
		// helloo();
	}
}