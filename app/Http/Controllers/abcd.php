<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class abcd extends Controller
{
    public function Home()
    {
        return view('home'); 
    }
    
    public function About()
    {
        return view('about'); 
    }
    
    public function Main()
    {
        return view('main'); 
    }
    
}
