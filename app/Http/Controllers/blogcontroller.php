<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function blog(){
        return view('afterlogin.blog');
    }
}
