<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailtiketController extends Controller
{
    public function content()
    {
    //mengambil data dari table tb_detail
    $tb_detail = DB::table('tb_detail')->get();

    //mengirim data ke view index
    return view('admin/content', ['tb_detail' => $tb_detail]);

	}
}
