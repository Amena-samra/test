<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request =$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($mail) use ($request)
    {
       // return $this->from($request->email,$request ->name)->subject('contact message')->view('/contact')->with('data',$this->data);
        Mail :: send('emails.contact-message',[
           'msg'=> $request -> message,
           
       ]);
        $mail->from($request->email , $request ->name);
        $mail ->to('momo.samra@gmail.com')->subject('Contact Message');

           });
        return redirect()->back()->with('flash_message','Thank you for your message .');
    }
}
