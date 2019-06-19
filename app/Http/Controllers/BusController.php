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

    public function add_Bus(Request $data_input)
	{
		
		Bus_Model::add_bus($data_input);

		return redirect('/admin/bus');
	}

	public function delete_Bus($id)
	{
		Bus_Model::delete_bus($id);

		return redirect('/admin/bus');
	}

	public function edit_Bus($id)
	{
	 	$tb_bus = DB::table('tb_bus')->where('no_polisi',$id)->get();

	 	return view('/admin/edit_Bus', ['tb_bus' => $tb_bus]);
	}

	public function bus_Update(Request $request){

		Bus_Model::bus_update($request);

        return redirect('/admin/bus');
	}
}
