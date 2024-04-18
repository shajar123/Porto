<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard(){
        return view('frontend.includes.dashboard');
    }
    public function getLogin(){
        return view('frontend.pages.login');
    }
}
