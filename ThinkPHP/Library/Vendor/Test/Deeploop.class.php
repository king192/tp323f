<?php
namespace Vendor\Test;

class Deeploop {
	function deeploop($i=1){
		echo $i;
		$i++;
		if($i<10){
			$this->deeploop($i);
		}
	}
}