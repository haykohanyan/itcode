<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function mail(Request $request)
    { $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $text = $request->text;

        Mail::to('itcode.am@gmail.com')->send(new SendMail($name,$email,$phone,$text));

        return back();
    }
}
