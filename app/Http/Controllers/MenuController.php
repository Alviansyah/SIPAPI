<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showHome()
    {
        return view('pages.home');
    }
}
