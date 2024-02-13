<?php

namespace App\Http\Controllers;
class HomeController extends Controller
{
    public function index()
    {
      return view('site.home.home');
    }

    public function home()
    {
        return view('home');
    }   
}