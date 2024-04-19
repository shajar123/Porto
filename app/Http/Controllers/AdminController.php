<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class AdminController extends Controller
{
    public function admin_blogs(){
        return view('admin.sidebar.blogs.blogs');
    }
    public function blogs_edit(){
        $blogs = Blogs::get();
        return view('admin.sidebar.blogs.edit-blogs',compact('blogs'));
    }
    public function admin_contact(){
        return view('admin.sidebar.contact');
    }
}
