<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class faqMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   
        public function build(request $request)
{
    
            
        return $this->view('mail',['msg'=>$request->question])->to('guptatarang888@gmail.com')->to(
            'gauravpal7710@gmail.com');
        return redirect('/faq');
    }
}
