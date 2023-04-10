<?php

use App\Http\Controllers\addtocartcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\afterlogincontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\contactcontrooler;
use App\Http\Controllers\contactdetails;
use App\Http\Controllers\feedbackcontroller;
use App\Http\Controllers\feedbackdetails;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\mainhomecontroller;
use App\Http\Controllers\newsblogui;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\newsletterblgcontroller;
use App\Http\Controllers\settings;
use App\Http\Controllers\updatehomecontroller;
use App\Http\Controllers\usercontroller;
use App\Models\cartdetails;
use App\Models\newslettersignin;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[Homecontroller::class,'redirect']);
// for main home page 
Route::get('/home',[mainhomecontroller::class,'home']);
// for after login navication and route controller 
Route::get('/loginhome',[afterlogincontroller::class,'home']);
// for making feedback 
Route::get('/feedback',[feedbackcontroller::class,'feedback']);
// for making route of the news letter signin 
Route::get('/news',[newscontroller::class,'news']);
Route::post('/feedback',[feedbackcontroller::class,'store']);
// route for making contact 
Route::get('/contact',[contactcontrooler::class,'contact']);
Route::post('/contact',[contactcontrooler::class,'store']);
//route for making update home
Route::get('/updatehome',[updatehomecontroller::class,'updatehome']);
Route::post('/updatehome',[updatehomecontroller::class,'store']);
// route for making settings 
Route::get('/settings',[settings::class,'settings']);
// route for making settings 
Route::get('/newsblog',[newsletterblgcontroller::class,'newsletter']);
Route::post('/newsblog',[newsletterblgcontroller::class,'store']);



// admin gom 
Route::get('/admin',[admincontroller::class,'admin']);

// for making user view 
Route::get('/userdetails',[usercontroller::class,'user']);
// route for making the details of user feedback 
Route::get('/feedbackdetails',[feedbackdetails::class,'feedbackdetails']);
// contact details of the the user 
Route::get('/contactdetails',[contactdetails::class,'contactdetails']);


Route::get('edituser/{id}',[usercontroller::class,'edit']);




// route for edit contact 
Route::get('edit-contact/{id}',[contactdetails::class,'edit']);
Route::put('update-contact/{id}',[contactdetails::class,'update']);
Route::get('delete-contact/{id}',[contactdetails::class,'destroy']);


Route::get('edit-home/{id}',[updatehomecontroller::class,'edit']);
Route::put('update-home/{id}',[updatehomecontroller::class,'update']);
Route::get('delete-home/{id}',[updatehomecontroller::class,'destroy']);


Route::get('edit-feedback/{id}',[feedbackdetails::class,'edit']);
Route::put('update-feedback/{id}',[feedbackdetails::class,'update']);
Route::get('delete-feedback/{id}',[feedbackdetails::class,'destroy']);



Route::get('edit-news/{id}',[newsletterblgcontroller::class,'edit']);
Route::put('update-news/{id}',[newsletterblgcontroller::class,'update']);
Route::get('delete-news/{id}',[newsletterblgcontroller::class,'destroy']);



Route::get('edit-user/{id}',[usercontroller::class,'edit']);
Route::put('update-user/{id}',[usercontroller::class,'update']);
Route::get('delete-user/{id}',[usercontroller::class,'destroy']);


// making view of add to cart 
Route::get('/updatecart',[addtocartcontroller::class,'addcart']);
Route::post('/updatecart',[addtocartcontroller::class,'store']);
// for user interface 
Route::get('/addcart',[addtocartcontroller::class,'cartui']);


// cartdetails to see the details of user who can booked the product
Route::get('/cartdetails',[addtocartcontroller::class,'cartdetails']);
// for adding product in cart 
Route::post('/cart1/{id}',[addtocartcontroller::class,'cartforproduct']);
Route::post('/cart2/{id}',[addtocartcontroller::class,'cartforproduct']);
Route::post('/cart3/{id}',[addtocartcontroller::class,'cartforproduct']);






