<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    //文章添加
    public function postadd (request $request) {
    	if ($request->isMethod('get')) {
    		$cats = \App\Category::get();
    		return view('admin/postadd',array('cats'=>$cats));
    	} else {
    		//dd($request->all());
    		$post = new post();
    		$post -> title = $request -> input('title');
    		$post -> content = $request -> input('content');
    		$post -> user_id = 1;
    		$post -> cat_id = $request -> input('cat_id');
    		if ($request->hasFile('img')) {
    			$dir = "./upload/".date('Ymd');
    			$suf = $request->file('img')->getClientOriginalExtension();
    			//dd($suf);
    			$filename = time().rand(10000,99999).'.'.$suf;
    			//dd($filename);
    			$request->file('img')->move($dir,$filename);
    			$post -> img = trim($dir."/".$filename,".");
    			//dd($date['img']);
    			
    			//dump($date['img']);
    		}

    		if ($post ->save()) {
    			return redirect('/postlist')->with('info','添加文章成功');
    		} else {
    			return redirect('/postlist')->with('info','添加文章失败');
    		}
    	}
    }

    public function postlist () {
    	return 22;
    }
}
