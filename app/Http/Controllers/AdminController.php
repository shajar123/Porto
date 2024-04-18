<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_blogs(){
        return view('admin.sidebar.blogs');
    }
    public function admin_contact(){
        return view('admin.sidebar.contact');
    }
}
