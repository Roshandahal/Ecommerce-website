<?php

namespace App\Http\Controllers;

use App\Models\updatehome;
use Illuminate\Http\Request;

class updatehomecontroller extends Controller
{
    public function updatehome()
    {
        $welcome = updatehome::all();
        return view('admin.updatehome', compact('welcome'));
    }

    public function edit($id)
    {
        $welcome = updatehome::find($id);
        return view('admin.edithome', compact('welcome'));
    }

    public function store(Request $request)
    {
        $updatehome = new updatehome();
        $updatehome->name = $request->input('name');
        $updatehome->description = $request->input('description');
        $updatehome->save();
        return redirect()->back()->with('status', 'thank you yourfeedback has been submitted successfully');
    }

    public function update(Request $request, $id)
    {
        $updatehome = updatehome::find($id);
        $updatehome->name = $request->input('name');
        $updatehome->description = $request->input('description');
        $updatehome->update();
        return redirect()->back()->with('status', 'thank you yourfeedback has been submitted successfully');
    }

    public function destroy($id){
        $updatehome=updatehome::find($id);
        $updatehome->delete();
        return redirect()->back()->with('status', 'Delete successfully');
    }
}
