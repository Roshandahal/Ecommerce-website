<?php

namespace App\Http\Controllers;

use App\Models\newslettersignin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;



class newsletterblgcontroller extends Controller
{
    public function newsletter()
    {
        $newsletter=newslettersignin::all();
        return view('admin.newsblog',compact('newsletter'));
    }


    public function store(Request $request)
    {
        $newsletter = new newslettersignin();
        $newsletter->productname = $request->input('productname');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/newsletter/', $filename);
            $newsletter->image = $filename;
        }
        $newsletter->price = $request->input('price');
        $newsletter->description = $request->input('description');
        $newsletter->discount = $request->input('discount');
        $newsletter->save();
        return redirect()->back()->with('status', 'Your news-blog has been upload successfully');
    }

    public function edit($id){
        $news=newslettersignin::find($id);
        return view('admin.editnewsblog',compact('news'));
    }

    public function update(Request $request, $id){
        $newsletter=newslettersignin::find($id);
        $newsletter->productname = $request->input('productname');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/newsletter/', $filename);
            $newsletter->image = $filename;
        }
        $newsletter->price = $request->input('price');
        $newsletter->description = $request->input('description');
        $newsletter->discount = $request->input('discount');
        $newsletter->update();
        return redirect()->back()->with('status', 'news updated successfully');

    }

    public function destroy($id){
        $newsletter=newslettersignin::find($id);
        $newsletter->delete();
        return redirect()->back()->with('status', 'delete successfully');

    }
}
