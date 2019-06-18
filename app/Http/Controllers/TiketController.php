<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    //

    public function tiket()
    {
    	$tb_tiket = DB::table('tb_tiket')->get();

    	return view('/admin/tiket', ['tb_tiket'=>$tb_tiket]);
    }
}
