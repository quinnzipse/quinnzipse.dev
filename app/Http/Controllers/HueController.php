<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HueController extends Controller
{
    function const(){

    }

    function control(){
        return view('dashboard/hue/hueDash');
    }

    function connect(){
        return view('dashboard/hue/connect');
    }
}
