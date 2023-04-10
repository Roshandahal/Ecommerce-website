<?php

namespace App\Http\Controllers;

use App\Models\updatehome;
use Illuminate\Http\Request;

class mainhomecontroller extends Controller
{
    public function home(){
        $welcome=updatehome::all();
        return view('home.home',compact('welcome'));
    }

    
}
