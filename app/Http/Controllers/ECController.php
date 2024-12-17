<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce_Controller extends Controller
{
    function Home(){
        return view('home');
    }

    function About(){
        return view('about');
    }

    function Contact(){
        return view('main');
    }
}
