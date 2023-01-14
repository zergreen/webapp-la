<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function index() {
        $city = "123 Bangkok, Thailand";
        $tel = "089-xxx-xxx";
        $email = "6301059@kmitl.ac.th";
        // return view('about',['address'=>$city,'tel'=>$tel]);

        return view('about',compact('city','tel','email'));

        // return view('about')
        //     ->with('city',$city)
        //     ->with('tel',$tel)
        //     ->with('email',$email)
        //     ->with('error','404 Not Found หาข้อมูลไม่เจอ');
        
    }

    function showData() {
        echo "Hello laravel 9";
    }
}
