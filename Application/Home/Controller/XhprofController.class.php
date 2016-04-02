<?php
namespace Home\Controller;
use Think\Controller;

class XhprofController extends Controller{
	public function index(){
		// import('Vendor.File.Test');
		// start profiling
		$XHPROF_ROOT  = '/tmp';
		xhprof_enable();

		// run program
		dump('hello');

		// stop profiler
		$xhprof_data = xhprof_disable();

		//
		// Saving the XHProf run
		// using the default implementation of iXHProfRuns.
		//
		include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
		include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_runs.php";

		$xhprof_runs = new \XHProfRuns_Default();

		// Save the run under a namespace "xhprof_foo".
		//
		// **NOTE**:
		// By default save_run() will automatically generate a unique
		// run id for you. [You can override that behavior by passing
		// a run id (optional arg) to the save_run() method instead.]
		//
		$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");

		echo "---------------\n".
		     "Assuming you have set up the http based UI for \n".
		     "XHProf at some address, you can view run at \n".
		     "<a href='http://localhost/xhprof_html/index.php?run=$run_id&source=xhprof_foo' target='_blank'>http://localhost/xhprof_html/index.php?run=$run_id&source=xhprof_foo</a>\n".
		     "---------------\n";
	}
	public function index1(){
		\Vendor\Xhprof\Xhprof::s();
		dump(true);
		\Vendor\Xhprof\Xhprof::e();
	}
	public function index2(){
		// import('Vendor.File.Test');
		// start profiling
		$XHPROF_ROOT  = '/tmp';
		xhprof_enable();

		// run program
		dump('hello');

		// stop profiler
		$xhprof_data = xhprof_disable();

		//
		// Saving the XHProf run
		// using the default implementation of iXHProfRuns.
		//
		
		import('Vendor.Xhprof.Util.Xhprof_lib');
		import('Vendor.Xhprof.Util.Xhprof_runs');

		$xhprof_runs = new \XHProfRuns_Default();

		// Save the run under a namespace "xhprof_foo".
		//
		// **NOTE**:
		// By default save_run() will automatically generate a unique
		// run id for you. [You can override that behavior by passing
		// a run id (optional arg) to the save_run() method instead.]
		//
		$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");

		echo "---------------\n".
		     "Assuming you have set up the http based UI for \n".
		     "XHProf at some address, you can view run at \n".
		     "<a href='http://localhost/xhprof_html/index.php?run=$run_id&source=xhprof_foo' target='_blank'>http://localhost/xhprof_html/index.php?run=$run_id&source=xhprof_foo</a>\n".
		     "---------------\n";
	}
	public function index3(){
		\Vendor\Xhprof\Xhp::s();
		dump(false);
		\Vendor\Xhprof\Xhp::e();
	}
}