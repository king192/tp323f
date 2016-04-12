<?php
namespace Vendor\Test;
/**
 * 冒泡排序
 * @author xhq <1434970057@qq.com>
 */
class Maopao {
	/**
	 * 排序
	 * @param  array $array 无序或有序数组
	 * @return array        排序后的数组
	 */
	public function sort($array){
		$len = count($array);
		for($i=0;$i<$len;$i++)
			for($j=0;$j<$len-$i-1;$j++)
				if($array[$j] > $array[$j+1])
				$this->swap($array[$j],$array[$j+1]);
		
			return $array;
	}
	/**
	 * 交换两个数
	 * @param  number &$a 引用
	 * @param  number &$b 引用
	 * @return void     
	 */
	public function swap(&$a,&$b){
		$temp = $a;
		$a = $b;
		$b = $temp;
	}
}