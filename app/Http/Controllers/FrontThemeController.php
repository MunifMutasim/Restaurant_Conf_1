<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontThemeController extends Controller
{
    public function index(){
        return view('frontendview/home');
    }

    public function about(){
        return view('frontendview/about');
    }
}
