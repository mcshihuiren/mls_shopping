<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class UserController extends Controller
{
    //显示所有管理员的信息
    public function index(){
    	$ad = json_encode(Admin::get(), JSON_FORCE_OBJECT);
    	// $ad = Admin::get();
    	// dd($ad);
    	return view('admin.user',compact('ad'));
    }

    //添加一个管理员
    public function addAdmin(){
    	return view('admin.addadmin');
    }
    
}
