<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class VolunteerController extends Controller
{
        public function insert( Request $request)
    {
    	$name = $request->input('name');
    	$age = $request->input('age');
    	$psex = $request->input('psex');
    	$type = $request->input('type');
    	$from = $request->input('workfrom');
    	$to = $request->input('workto');
    	$mobile = $request->input('mobile');
    	$address = $request->input('address');
    	$city = $request->input('city');
    	$district = $request->input('district');
    	$state = $request->input('state');  	
    	$email = $request->input('email');
    	$qualification = $request->input('qualification');
        $now = Carbon::now();
    	
    $data = array('name'=>$name,'age'=>$age,'sex'=>$psex,'type'=>$type,'workfrom'=>$from,'workto'=>$to,'address'=>$address,'city'=>$city,'state'=>$state,'district'=>$district,'email'=>$email,'mobile'=>$mobile,'Qualification'=>$qualification,'created_at'=>$now, 'updated_at'=>$now);
    	DB::table('volunteers')->insert($data);
    	return redirect('/home');
    
    }
}
