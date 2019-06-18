<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Bus_Model;

class BusController extends Controller
{
    public function bus()
    {
    	$result=Bus_Model::disp_bus();

    	return view('/admin/bus', ['tb_bus'=>$result]);
    }
}
