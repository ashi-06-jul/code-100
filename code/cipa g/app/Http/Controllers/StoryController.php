<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\member;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class StoryController extends Controller
{
    public function insert( Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $tag = $request->input('tag');
        $story = $request->input('detail');
        $approval = $request->input('approval');
if ($request->hasFile('photo1')){
                 $filename1 = $request->photo1->getClientOriginalName() ;
          $request->photo1->storeAs('img',$filename1);
          if ($request->hasFile('photo2')){
                 $filename2 = $request->photo2->getClientOriginalName() ;
          $request->photo2->storeAs('img',$filename2);
           if ($request->hasFile('photo3')){
                 $filename3 = $request->photo3->getClientOriginalName() ;
          $request->photo3->storeAs('img',$filename3);
           if ($request->hasFile('photo4')){
                 $filename4 = $request->photo4->getClientOriginalName() ;
          $request->photo4->storeAs('img',$filename4);
      }
      }

      }
      $dta  = array('photo1'=>$filename1,'photo2'=>$filename2,'photo3'=>$filename3,'photo4'=>$filename4);
                    DB::table('image')->insert($dta);
      }
        $purpose = 'share';
        $approval = 'null';
        $now = Carbon::now();
        $data = array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'approval'=>$approval,'created_at'=>$now, 'updated_at'=>$now);
        $da = array('purpose'=>$purpose,'tag'=>$tag,'description'=>$story,'feedby'=>$name,'created_at'=>$now, 'updated_at'=>$now);


        DB::table('stories')->insert($data);
     
        DB::table('imagedetails')->insert($da);


    	return redirect('/story');
    }
}
