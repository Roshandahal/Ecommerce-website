<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackcontroller extends Controller
{
    public function feedback(){
        return view('afterlogin.feedback');
    }

    public function store(Request $request){
        $feedback=new feedback();
        $feedback->feedback=$request->input('feedback');
        $feedback->save();
        return redirect()->back()->with('status','thank you yourfeedback has been submitted successfully');

    }
    
}
