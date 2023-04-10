<?php

namespace App\Http\Controllers;

use App\Models\addcart;
use App\Models\cartdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addtocartcontroller extends Controller
{
    public function addcart(){
        $addcart=addcart::all();
        return view('admin.updateaddtocart',compact('addcart'));
    }
    public function store(Request $request){
        $addcart=new addcart();
        $addcart->name1=$request->input('name1');
        $addcart->price1=$request->input('price1');
        $addcart->discount1=$request->input('discount1');
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/productone/', $filename);
            $addcart->image1 = $filename;
        }

        $addcart->name2=$request->input('name2');
        $addcart->price2=$request->input('price2');
        $addcart->discount2=$request->input('discount2');
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/producttwo/', $filename);
            $addcart->image2 = $filename;
        }

        $addcart->name3=$request->input('name3');
        $addcart->price3=$request->input('price3');
        $addcart->discount3=$request->input('discount3');
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/productthree/', $filename);
            $addcart->image3 = $filename;
        }
        $addcart->save();
        return redirect()->back()->with('status','you cart product has been posted.');

    }
    // for making search function 
    public function cartui(Request $request){
        $search=$request['search'] ?? "";
        if($search !=""){
            // if search 
            $cart=addcart::where('name1','=',$search)->orwhere('name2','=',$search)->orwhere('name3','=',$search)->get();
            

        }else{
            $cart=addcart::all();
            $cartdetailes=cartdetails::all();
        }     
        return view('cart.cart',compact('cart','search','cartdetailes'));
    }

    // for making add cart of the user 
    public function cartforproduct(Request $request, $id){
        if(Auth::id()){

            $user=auth()->user();
            $product=addcart::find($id);
            $cart=new cartdetails();


            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->product_title=$product->name1;
            $cart->price=$product->price1;
            $cart->quantity=$request->quantity;


            // for second row 
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->product_title=$product->name2;
            $cart->price=$product->price2;
            $cart->quantity=$request->quantity2;
            // for third row 
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->product_title=$product->name3;
            $cart->price=$product->price3;
            $cart->quantity=$request->quantity3;
            $cart->save();

            return redirect()->back()->with('status','items added in addcart successfully');
        }
        else{
            return redirect('login'); 
        }
    }
    public function cartdetails(){
        $cartdetailes=cartdetails::all();
        return view('admin.cartdetails',compact('cartdetailes'));
    }
}
