<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class afterlogincontroller extends Controller
{
    public function home(){
        return view('afterlogin.home');
    }
}
