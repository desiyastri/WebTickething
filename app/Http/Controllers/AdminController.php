<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    // public function index()
    // {
    // 	#..Start Coding..
    // 	return view('admin/index');
    // }

    public function content()
    {
    	return view('admin/content');
    }
}
