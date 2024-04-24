<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\State;
use App\Models\Email;


class FrontendController extends Controller
{
    public function dashboard(){
        return view('frontend.pages.dashboard');
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
    public function register(){
        $country=Country::get();
        $states=State::get();
        $city=City::get();

        return view('frontend.pages.register',compact('country','states','city'));
    }

    public function user_email(Request $request){
        $validate = $request->validate([
            'email' => ['required'],
        ]);
        $store =Email::create([
            'email'=>$request->email,
        ]);
        return json_encode([
            'Error' => false,
            'Message' => 'Color added successfully'
        ]);
    }
}
