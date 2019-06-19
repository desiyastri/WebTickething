<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bus_Model extends Model
{
    //

    public static function disp_bus()
    {
    	$table = 'tb_bus';
    	$res_bus = DB::table($table)->get();

    	return $res_bus;
    }

    public static function add_bus($data_input)
    {	
    	DB::table('tb_bus')->insert([
			'no_polisi'=>$data_input->no_polisi,
			'merk_mesin'=>$data_input->merk_mesin,
			'status_bus'=>$data_input->status_bus,
			'nama_bus'=>$data_input->nama_bus
		]);
    }

    public static function delete_bus($id)
    {
    	DB::table('tb_bus')->where('no_polisi',$id)->delete();

    }
}
