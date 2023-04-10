<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function user(){
        $user=User::all();
        return view('admin.user',compact('user'));
    }

    public function edit($id){
        $user =user::find($id);
        return view('admin.edituser',compact('user'));
    }

    public function update(Request $request, $id){
        $user=user::find($id);
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->usertype = $request->input('usertype');
        $user->update();
        return redirect()->back()->with('status', 'your user has been updated successfully');
    }

    

   
}
