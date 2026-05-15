<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserName extends Controller
{
    function getUser(){
        return "Laravel Tutorial";
    }

    function aboutUser(){
        return "Laravel is a framework of the php";
    }

    function getUserName($name){
        // return "My name is ".$name;
        return view('username',['name'=>$name]);
    }
    function adminLogin(){
        // return "My name is ".$name;
        return view('admin.login');
    }
}
