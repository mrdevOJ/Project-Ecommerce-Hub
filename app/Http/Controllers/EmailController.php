<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $data = $request->validate([

            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ],[
            'email.required'=>'If faut taper votre email',
            'message.required'=>'message at obliger'
        ]);
        Mail::to('ofpptpfe@gmail.com')->send(new ContactEmail($data));
        return Redirect::to('/home');

    }


}
