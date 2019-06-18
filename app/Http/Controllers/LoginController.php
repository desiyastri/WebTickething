<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //Start Code....
    public function login()
    {
    	$users=DB::table('tb_pegawai')->get();

    	return view('admin/index',['tb_pegawai' => $users]);
    }
}
