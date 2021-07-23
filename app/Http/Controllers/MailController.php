<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMailView(){
    	return view('send_mail');
    }
    public function sendMail(Request $request){
    	// $email = $request->email;
    	$email = "moesandar1001@gmail.com";
    	$title = $request->title;
    	$message = $request->message;
    	// dd($name,$email,$message);
    	
    	$data = [
    		'title' => $title,
    		'message' => $message
    	];

    	\Mail::to($email)->send(new \App\Mail\ExampleMail($data));
    	dd('Mail sent successfully');
    }
}
