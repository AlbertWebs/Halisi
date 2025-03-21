<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mailer;
use Redirect;
use Session;
use Auth;
use Mail;

class CultureController extends Controller
{
    public function cultures($slung)
    {
        $Country = DB::table('cultures')->where('country',$slung)->get();
        return view('front.cultures',compact('Country'));
    }

    public function Cultural_Tourism_Uganda()
    {
        // $Country = DB::table('cultures')->where('country',$slung)->get();
        return view('front.cultures_uganda');

    }

    public function Cultural_Tourism_Tanzania()
    {
        return view('front.cultures_tanzania');
    }
    public function Cultural_Tourism_Ethiopia()
    {
        return view('front.cultures_ethiopia');
    }
    public function Cultural_Tourism_Botswana()
    {
        return view('front.cultures_botswana');
    }
    public function Cultural_Tourism_Namibia()
    {
        return view('front.cultures_namibia');
    }
    public function Cultural_Tourism_Lesotho()
    {
        return view('front.cultures_lesotho');
    }
    public function trip_impact()
    {
        return view('front.trip_impact');
    }
    
}
