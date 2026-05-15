<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserName;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::view('/ashwin','ashwin');


Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});

Route::redirect('/home','/welcome'); //redirect with routing

Route::get('user',[UserName::class,'getUser']);
Route::get('userAbout',[UserName::class,'aboutUser']);
Route::get('user/{name}',[UserName::class,'getUserName']);
Route::get('admin',[UserName::class,'adminLogin']);


