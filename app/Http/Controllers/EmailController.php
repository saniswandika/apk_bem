<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendToEmail;
use App\Models\user;

class EmailController extends Controller
{
    public function index()
    {
        $mailData = user::find(25);
        // dd($user);
       
         
        Mail::to('saniswandikaa@gmail.com')->send(new SendToEmail($mailData));
           
        dd("Email is sent successfully.");
    }
}
