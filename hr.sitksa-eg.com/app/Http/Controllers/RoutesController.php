<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends LayoutController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return view('pages.index');
    }

    public function laravel()
    {
        return view('welcome');
    }
}
