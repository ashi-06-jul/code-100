<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insert(Request $request)
    { 
         $this->validate($request,[
         	'first' => 'required']);
    	$first = $request->input('first');
    	$last = $request->input('last');
    	$middle = $request->input('middle');
    	$email = $request->input('email');
    	$pwd = $request->input('Password');

    	$data = array('first'=>$first,'last'=>$last,'middle'=>$middle,'email'=>$email,'Password'=>$pwd);
    	DB::table('ins')->insert($data);
    	echo "success";
    }

}
