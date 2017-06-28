<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newsletter;

class NewsletterController extends Controller
{
    //

    public function send(Request $request) {

    	$emails = User::where('newsletter','=',1)->pluck('email')->all();

		    	foreach ($emails as $email) {
		    		# code...

		    		Mail::to($email)->send(new Newsletter());

			       

		    	}

		    	 return redirect('/');

    }
}
