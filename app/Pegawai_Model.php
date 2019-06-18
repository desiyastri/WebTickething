<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pegawai_Model extends Model
{
    //
    public static function disp_pegawai()
    {
    	$table = 'tb_pegawai';
    	$res_table = DB::table($table)->get();

    	return $res_table;
    }

    public static function add_pegawai($data_input)
    {	
    	DB::table('tb_pegawai')->insert([
			'id_pegawai'=>$data_input->id_pegawai,
			'nama_depan'=>$data_input->nama_depan,
			'nama_belakang'=>$data_input->nama_belakang,
			'jk'=>$data_input->r1,
			'no_telp'=>$data_input->phone,
			'pekerjaan'=>$data_input->pekerjaan
		]);
    }

    public static function delete_pegawai($id)
    {
        DB::table('tb_pegawai')->where('id_pegawai',$id)->delete();
    }
}
