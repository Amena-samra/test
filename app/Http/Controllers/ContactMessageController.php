<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
class ContactMessageController extends Controller
{
     public function create()
    {
    	return view ('contact');
    }

     public function store(Request $request)
    {
    	$this ->validate($request ,
    		['fullname'=>'required',
    		'email'=>'required|email',
    		'message'=>'required'
    	]);
    	/*$data =array('fullname' =>$request -> fullname,
    		         'message' =>$request -> message);
    	Mail ::to('momo.samra@gmail.com')->send(new SendMail($data));
    	    	return redirect()->back()->with('flash_message','Thank you for your message .');*/
 



    	Mail :: send('emails.contact-message',[
           'msg'=> $request -> message
       ],function ($mail) use ($request){
           	$mail->from($request->email , $request ->name);
           	$mail ->to('momo.samra@gmail.com')->subject('Contact Message');

           });
    	return redirect()->back()->with('flash_message','Thank you for your message .');
    }
}
