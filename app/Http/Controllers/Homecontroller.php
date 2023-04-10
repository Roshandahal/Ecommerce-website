<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Homecontroller extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1')
        {
            return view('admin.home');
        } 
        
        // elseif($usertype == '2')
        // {
        //     return view('admin.superadmin');
        // } 
        // elseif($usertype == '3')
        // {
        //     return view('admin.founder');
        // } 
        else 
        {
            return view('dashboard');
        }
    }
}
