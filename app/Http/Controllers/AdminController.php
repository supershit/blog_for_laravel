<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //登录界面
    public function login (request $request) {
    	if ($request->isMethod('get')) {
    		return view('admin/login');
    	} else {
    		$this->validate($request,array(
    			'username' => "required|regex:/^\w{1,10}$/",
    			'password' => 'required',
    			),array(
    			'username.required' => "用户名必填",
    			'password.required'	=> '密码必填',
    			'username.regex'	=>	'用户名不符合',
    			));
    		//echo \Hash::make('admin');die;
    		$user = \App\User::where('username','=',$request->input('username'))->first();
    		if (!$user) {
    			return back()->with('info','用户名错误');
    			die;
    		}
    		//dd($user);
    		if(\Hash::check($request->input('password'),$user->password)) {
    			session(array('id'=>$user->id,'username'=>$user->username));
    			return redirect('/postlist')->with('info','登录成功');
    		} else {
    			return back()->with('info','密码错误');
    		}
    	}
    		

    }

    public function logout () {
        session()->flush();
        return redirect('/login')->with('info','退出成功');
    }

}
