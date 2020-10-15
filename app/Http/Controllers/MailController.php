<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;

class MailController extends Controller
{
    public function send(){
        Mail::send(new sendMail());
        return redirect()->route('welcome')->with('success', 'Спам отправлен');
    }

    public function email(){
        return view('email');
    }
}
