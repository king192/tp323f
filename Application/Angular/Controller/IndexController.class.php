<?php
namespace Angular\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    //     {name:'Jani',country:'Norway'},
    //     {name:'Hege',country:'Sweden'},
    //     {name:'Kai',country:'Denmark'}
    	$array = array();//初始化数组
    	if(true){
    		$array = array(
	    		array('name'=>'Jani','country'=>'Norway'),
	    		array('name'=>'Hege','country'=>'Sweden'),
	    		array('name'=>'kai','country'=>'Denmark'),
    			);
    	}
    	$array = json_encode($array);
    	$this->assign('json',$array);
        $this->display();
    }
}