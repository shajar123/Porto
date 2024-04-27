<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\State;
use App\Models\Email;
use App\Models\Product;

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
        $categories =Category::get();
         return view('frontend.pages.category',compact('categories'));
    }
    public function products($id){

        $products = Product::get();
        $Ids = [];

        foreach ($products as $product) {

            if (in_array($id, json_decode($product->category_id))) {
                $Ids[] = $product->id;
            }
        }


        $allproducts=Product::whereIn('id',$Ids)->get();

        return view('frontend.pages.products',compact('allproducts'));
    }
    public function productsDetail($id){

       $productsdetail=Product::where('id',$id)->get();

        return view('frontend.pages.products-detail',compact('productsdetail'));
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
            'Message' => 'Email Saved successfully'
        ]);
    }
}
