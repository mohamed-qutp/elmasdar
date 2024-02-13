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
    public function ourClients()
    {
        return view('site.home.our-clients');
    }  
    public function careers()
    {
      return view('site.home.careers');
    }
    public function about()
    {
      return view('site.home.about');
    }
}