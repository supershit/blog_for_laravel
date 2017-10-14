<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

class CategoryController extends Controller
{
    //先弄个测试的方法
    public function layout () {
    	return view('layout');
    }

    public function categorylist () {
    	$cats = Category::select(\DB::raw('*,concat(path,",",id) as c_path')) -> OrderBy('c_path') ->get();
    	$cats = hand_cats($cats);
    	//dd($cats);
    	return view('admin/categorylist',array('cats'=>$cats));
    }

    //添加分类方法
    public function categoryadd (Request $request) {
	    	if ($request->isMethod('get')) {
	    	$cats = Category::select(\DB::raw('*,concat(path,",",id) as c_path')) -> OrderBy('c_path') ->get();
	    	$cats = hand_cats($cats);
	    	//dd($cats);
	    	return view('admin/categoryadd',array('cats'=>$cats));
    	} else {
    		//dd($request->all());
    		$cat = new Category();
    		$cat -> name = $request -> input('name');
    		$cat -> pid =$request ->input('p_id');
    		if ($cat->pid != 0) {
    			$p_path = $cat::find ( $cat -> pid ) -> path;
    			$cat -> path = $p_path.','.$cat->pid; 
    		}
    		if ($cat -> save ()) {
    			return redirect('/categorylist') -> with ('info','添加成功');
    		} else {
    			return redirect('/categorylist') -> with ('info','添加失败');
    		}
    	}

    }

    public function categoryedit (request $request,$id) {
    	if ($request->isMethod('get')) {
    	$cats = Category::select(\DB::raw('*,concat(path,",",id) as c_path')) -> OrderBy('c_path') ->get();
    	$cats = hand_cats($cats);
    		$cat = Category::findOrFail($id);
    		//dd($cat);
    		return view('admin/categoryedit',array('cat'=>$cat,'cats'=>$cats));
    	} else {
    		$cat = Category::findOrFail($id);
    		$cat->name = $request -> input('name');
    		if ($cat->save()) {
    			return redirect('/categorylist') -> with('info','修改成功');
    		} else {
    			return redirect('/categorylist') -> with('info','修改失败');
    		}
    	}
    }
}
