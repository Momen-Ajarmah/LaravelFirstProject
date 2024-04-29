<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
//------creating and namming routes-----
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('about',function() {
//     return "<h1>About Page </h1>";
// }) ->name('hello');
// Route::get('contact' ,function(){
//     return "<h1>Contact Page</h1>";
// });
// Route::get('contact/{id}' , function ($id){
//     return $id  ;
// }) -> name('edit-contact');

// Route::get('home', function(){
//  return "<a href='".route('edit-contact',1)."'>About</a>";
// });
//---------grouping routes---------
// Route::group(['prefix' =>'customer'],function(){

//     Route::get('/',function(){
//         return "<h1>Customer List</h1>";
//     });
    
//     Route::get('/create',function(){
//         return "<h1>Customer Create</h1>";
//     });
    
//     Route::get('/show',function(){
//         return "<h1>Customer Show</h1>";
//     });

// });
//--------fallback route-------
// Route::get('/',function(){
//     return view('Welcome');
// });
// Route::get('about',function(){
//     return view('about');
// });
// Route::get('/contact',function(){
//     return view('contact');
// });

// Route::fallback(function(){
//     return "wrong Route !";
// });
//---------passing and rendering data---------
// Route::get('/',function(){
//     return view('welcome');
// });
// Route::get('about',function(){
//     $about = 'this is about page 1';
//     return view('about',['about' =>$about]);
// });
//-----or-----
// Route::get('about',function(){
//     $about = 'this is about page 2';
//     $about2 = 'this is about two';
//     return view('about',compact('about','about2'));
// });
// Route::get('contact',function(){
//     return view('contact');
// });
 Route::get('/',function(){
     return view('welcome');
 });
//Route::get('/home',[HomeController::class, 'index']);
Route::get('/home',HomeController::class);

Route::get('/about',[AboutController::class,'index']);

 Route::get('contact',[ContactController::class,'index']);

 Route::resource('blog', BlogController::class );