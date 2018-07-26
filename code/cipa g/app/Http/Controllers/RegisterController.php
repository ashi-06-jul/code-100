<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('index11');
    
    }
    public function store(Request $request)
    {
        User::register($request->all());
        return $request->all();
    }
}
