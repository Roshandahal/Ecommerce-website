<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactdetails extends Controller
{
    public function contactdetails()
    {
        $contact = contact::all();
        return view('admin.contactdetails', compact('contact'));
    }

    public function edit($id)
    {
        $contact = contact::find($id);
        return view('admin.editcontact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->contactnumber = $request->input('contactnumber');
        $contact->purpose = $request->input('purpose');
        $contact->update();
        return redirect()->back()->with('status', 'image updated successfully.');
    }

    public function destroy($id)
    {
        $contact = contact::find($id);
        $contact->delete();
        return redirect()->back()->with('status', 'Deleted successfully.');
    }
}
