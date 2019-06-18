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
}
