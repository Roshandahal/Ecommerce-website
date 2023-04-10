<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactcontrooler extends Controller
{
    public function contact(){
        return view('afterlogin.contact');
    }

    public function store(Request $request){
        $contact=new contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->contactnumber=$request->input('contactnumber');
        $contact->purpose=$request->input('purpose');
        $contact->save();
        return redirect()->back()->with('status','Congrulation you have make contact succesfully
        wait for our reply.');
    }
}
