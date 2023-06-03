<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mailer;
use Redirect;
use Session;
use Auth;
use Mail;

class HomeController extends Controller
{

    public function itinerary($slung)
    {
        $Experience = DB::table('experiences')->where('slung',$slung)->get();
        return view('front.itinerary',compact('Experience'));
    }

    public function countries($slung)
    {
        $Country = DB::table('countries')->where('slung',$slung)->get();
        return view('front.countries',compact('Country'));
    }

    public function copyright()
    {
        $Terms = DB::table('copyright')->get();
        return view('front.copyright',compact('Terms'));
    }

    public function terms()
    {
        $Terms = DB::table('terms')->get();
        return view('front.terms',compact('Terms'));
    }





    public function message(Request $request){
        $switch = $request->switch;

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $number = $request->number;
        if($switch == "plan"){
            $subject = "Plan My Tour";
            $date = $request->date;
            $Mail = "Hello Admin, On Date $date, $name,With phone number $number, Sent a mail with the message, $message, Selected date $date";
         }else{
             $subject = $request->subject;
             $date = date('Y-M-D-d h-i-s');
             $Mail = "Hello Admin, On Date $date, $name, With phone number $number, Sent a mail with the message, $message";
         }
         Mailer::mail($subject, $email, $name, $message);
         return Redirect::back();

    }
}
