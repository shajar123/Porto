<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Contact;

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
        $contact =Contact::first();
        return view('admin.sidebar.contact',compact('contact'));
    }
    public function admin_login(){
        return view('admin.login.login');
    }


}
