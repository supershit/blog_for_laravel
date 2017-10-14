<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index ($cat) {
    	//dd($cat);
    	if ($cat == 'index') {
    		$title = 'index';
	    	$cats = \App\Category::where('pid','=',0)->get();
	    	$posts = \App\Post::orderBy('id','desc')->paginate(8);
	    	return view('home/index',array('cats'=>$cats,'posts'=>$posts,'title'=>$title));
    	} else {
    		$cats = \App\Category::where('pid','=',0)->get();

    		$cata = \App\Category::where('name','=',$cat)->firstOrFail();
    		//dd($cat);
    		$posts = $cata->post()->orderBy('id','desc')->get();
    		//dd($posts)
    		$title = $cat;
	    	//$posts = \App\Post::where()->orderBy('id','desc')->paginate(8);
	    	return view('home/index',array('cats'=>$cats,'posts'=>$posts,'title'=>$title));
    	}

    }

    public function homelayout () {
    	return view('homelayout');
    }
}
