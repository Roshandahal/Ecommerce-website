<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackdetails extends Controller
{
    public function feedbackdetails(){
        $feedback=feedback::all();
        return view('admin.feedbackdetails',compact('feedback'));
    }

    public function edit($id)
    {
        $feedback = feedback::find($id);
        return view('admin.editfeedback', compact('feedback'));
    }

    public function update(Request $request, $id){
        $feedback=feedback::find($id);
        $feedback->feedback=$request->input('feedback');
        $feedback->update();
        return redirect()->back()->with('status','thank you yourfeedback has been updated successfully');

    }

    public function destroy($id){
        $feedback=feedback::find($id);
        $feedback->delete();
        return redirect()->back()->with('status','Feedback delete successfully');

    }
}
