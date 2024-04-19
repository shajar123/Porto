<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Contact;


class FrontendController extends Controller
{
    public function dashboard(){
        return view('frontend.includes.dashboard');
    }
    public function blogs(){
        $blogs=Blogs::get();
        return view('frontend.pages.blog',compact('blogs'));
    }
    public function blog_details($id){
        $blogs=Blogs::findOrFail($id);
        return view('frontend.pages.blog-details',compact('blogs'));
    }
    public function contact_us(){
        $contacts=Contact::latest()->first();
        return view('frontend.pages.contact-us',compact('contacts'));
    }
    public function category(){
        return view('frontend.pages.category');
    }
    public function products(){
        return view('frontend.pages.products');
    }
    public function wishlist(){
        return view('frontend.elements.wishlist');
    }
    public function shopping_cart(){
        return view('frontend.elements.shopping-cart');
    }
    public function about_us(){
        return view('frontend.elements.about-us');
    }
    public function checkout(){
        return view('frontend.elements.checkout');
    }
    public function getLogin(){
        return view('frontend.pages.login');

    }
}
