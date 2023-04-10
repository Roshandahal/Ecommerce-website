<?php

namespace App\Http\Controllers;

use App\Models\newslettersignin;
use Illuminate\Http\Request;

class newscontroller extends Controller
{
    public function news(){
        $news=newslettersignin::all();
        return view('news.news',compact('news'));
    }
}
