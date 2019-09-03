<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
    	$user = Auth::user();
    	if($request->isMethod('POST')){

	        $this->validate($request, [
	            'name' => 'required',
	            'email' => 'required|email',
	            'message' => 'required|max:500'
	        ]);

	        Mail::to('hanchenggen105@outlook.com')->send(new SendFormMail());
	    }
	    return view('pages.support',['user' => $user]);
    }
}
