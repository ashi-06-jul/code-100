<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\faqMail;
class MailController extends Controller
{
    public function send()
    {
    	Mail::send(new faqMail());
    }
    public function email()
    {
    	return view('faq');
    

    }
}
