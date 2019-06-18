<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pegawai_Model;

class PegawaiController extends Controller
{
    public function pegawai()
    {
    	$result = Pegawai_Model::disp_pegawai();

    	return view('admin/pegawai', ['tb_pegawai'=>$result]);
    }

    public function add_Pegawai(Request $data_input)
	{
		
		Pegawai_Model::add_pegawai($data_input);

		return redirect('/admin/pegawai');
	}

    public function delete_Pegawai($id)
    {
        Pegawai_Model::delete_pegawai($id);

        return redirect('/admin/pegawai');
    }
}
