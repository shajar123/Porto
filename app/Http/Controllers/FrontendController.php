<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard(){
        return view('frontend.includes.dashboard');
    }
    public function blogs(){
        return view('frontend.pages.blog');
    }
    public function contact_us(){
        return view('frontend.pages.contact-us');
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
}
