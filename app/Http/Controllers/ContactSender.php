<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactSender extends Controller
{
    public function sendContactForm(Request $request)
    {

        $request->validate([
            'fnm' => 'required|min:5',
            'inm' => 'required|min:5',
            'em' => 'required|email',
            'ph' => 'required|min:11|numeric',
            'ct' => 'required|min:5',
            'st' => 'required|min:1|numeric',
            'url' => 'required',
            'in_msg' => 'required|min:5',
        ]);


        $data = [
            'first_name' => $request->fnm,
            'institute_name' => $request->inm,
            'email' => $request->em,
            'phone_number' => $request->ph,
            'country' => $request->ct,
            'student' => $request->st,
            'url' => $request->url,
            'message' => $request->in_msg,
        ];
        $user['to']='serverpixuser@gmail.com';
        Mail::send('mail', $data, function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('this is an subject');
        });
    }
}
