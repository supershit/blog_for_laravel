<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //先弄个测试的方法
    public function layout () {
    	return view('layout');
    }

    public function categorylist () {
    	$cats = \App\Category::get();
    	//dd($cats);
    	return view('admin/categorylist',array('cats'=>$cats));
    }

    //添加分类方法
    public function categoryadd () {
    	$cats = \App\Category::get();
    	return view('admin/categoryadd',array('cats'=>$cats));
    }
}
