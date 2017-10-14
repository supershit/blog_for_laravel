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
    	$posts = Post::paginate(15);
    	//dump($posts[3]);
    	return view('admin/postlist',array('posts'=>$posts));
    }

    public function postedit (request $request,$id) {
    	if ($request->isMethod('get')) {
    	$post = Post::findOrFail($id);
    	$cats = \App\Category::get();
    	$cats = hand_cats($cats);
    	return view('admin/postedit',array('post'=>$post,'cats'=>$cats));
      }	else {
      	$post = Post::findOrFail($id);
      	$post->title = $request->input('title');
      	$post->content = $request->input('content');
      	$post->cat_id = $request->input('cat_id');
      	$post->user_id = 1;
	      	if ($request->hasFile('img')) {
	    			$dir = "./upload/".date('Ymd');
	    			$suf = $request->file('img')->getClientOriginalExtension();
	    			//dd($suf);
	    			$filename = time().rand(10000,99999).'.'.$suf;
	    			//dd($filename);
	    			$request->file('img')->move($dir,$filename);
	    			$post -> img = trim($dir."/".$filename,".");
	      	}

	      	if ($post->save()) {
	      		return redirect('/postlist') -> with('info','修改文章成功');
	      	} else {
	      		return redirect('/postlist') -> with('info','修改文章失败');
	      	}
      }

    }
}
