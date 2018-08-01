<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\member;
use Carbon\Carbon


class MemberController extends Controller
{
    public function insert( Request $request)
    {
    	$pname = $request->input('pname');
    	$page = $request->input('page');
    	$psex = $request->input('psex');
    	$address = $request->input('address');
    	$address2 = $request->input('address2');
    	$city = $request->input('city');
    	$state = $request->input('state');
    	$district = $request->input('district');
    	$sibling=$request->input('sibling');
    	$email = $request->input('email');
    	$mobile = $request->input('mobile');
    	$detail = $request->input('detail');
    	$qualification = $request->input('qualification');
    	$sname = $request->input('sname');
    	$sage = $request->input('sage');
    	$ssex = $request->input('ssex');
    	$history = $request->input('history');
    	$rel = $request->input('rel');
    	$name = $request->input('name');
    	$age = $request->input('age');
    	$now = Carbon::now();
    	
    	$data = array('pname'=>$pname,'page'=>$page,'sex'=>$psex,'address'=>$address,'address2'=>$address2,'city'=>$city,'state'=>$state,'district'=>$district,'email'=>$email,'mobileno'=>$mobile,'detail'=>$detail,'qualification'=>$qualification,'siblingname'=>$sname,'siblingage'=>$sage,'siblingsex'=>$ssex,'history'=>$history,'relation'=>$rel,'name'=>$name,'age'=>$age,'sibling'=>$sibling, 'created_at'=>$now, 'updated_at'=>$now);
    	DB::table('members')->insert($data);
    	return redirect('/member');
    
    }
}
