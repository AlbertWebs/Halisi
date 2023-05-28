<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function itinerary($slung)
    {
        $Experience = DB::table('experiences')->where('slung',$slung)->get();
        return view('front.itinerary',compact('Experience'));
    }
}
