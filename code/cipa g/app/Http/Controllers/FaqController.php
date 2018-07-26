<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\faq;
use Carbon\Carbon;


class FaqController extends Controller
{

    public function insert( Request $request)
    {
    	$question = $request->input('question');
    	$answer = $request->input('answer');
          $now = Carbon::now();
    	$data = array('question'=>$question,'answer'=>$answer,'created_at'=>$now, 'updated_at'=>$now);

    	DB::table('faqs')->insert($data);
    	return redirect('/faq');
    
    }
     public function getdata()
    {
        $info['data']=DB::table('faqs')->get();
        if(count($info>0))
        return view('/faq',compact('info'));
    else
        return view('/faq');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    		



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
