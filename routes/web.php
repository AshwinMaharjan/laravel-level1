<?php

use Illuminate\Support\Facades\Route;

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


