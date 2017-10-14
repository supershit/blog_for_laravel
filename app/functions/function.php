<?php
	//自定义函数    作用是用分类的path给分类的结果加上前缀
	function hand_cats ($cats) {
		foreach ($cats as $key => $value) {
			$no = count(explode(',',$value['path']));
			$value['name'] = str_repeat("|--",$no-1).$value['name'];
		}
		return $cats;
	}