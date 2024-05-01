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
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\User_message;
use Illuminate\Support\Facades\Auth;



class FrontendController extends Controller
{
    public function dashboard(){

       $products=  Product::latest()->get();
       $categories= Category::latest()->get();
       $userId = Auth::id();

        return view('frontend.pages.dashboard',compact('products','categories','userId'));
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
    public function productsAll(){
        $allproducts =Product::get();
        return view('frontend.pages.all-products',compact('allproducts'));
    }


    public function wishlist(){
        $userId = auth()->id();
        $wishlistItems = Wishlist::where('user_id', $userId)->get();
        $productDetails = [];

        foreach ($wishlistItems as $wishlistItem) {
            $product = Product::find($wishlistItem->product_id);
            if ($product) {
                $productDetails[] = $product;
            }
        }
        return view('frontend.elements.wishlist', ['productDetails' => $productDetails]);
    }




    public function shopping_cart(){
        $userId = auth()->id();
        $wishlistItems = Cart::where('user_id', $userId)->get();
        $cartdetails = [];

        foreach ($wishlistItems as $wishlistItem) {
            $product = Product::find($wishlistItem->product_id);
            if ($product) {
                $cartdetails[] = $product;
            }
        }
        return view('frontend.elements.shopping-cart', ['cartdetails' => $cartdetails]);
    }


    public function about_us(){
        return view('frontend.elements.about-us');
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
//     public function checkout(){

//         $countries=Country::get();
//         $states=State::get();
//         $cities=City::get();


//      return view('frontend.elements.checkout',compact('countries','states','cities'));

// }
public function checkout()
{
    $userId = auth()->id();

    $countries = Country::get();
    $states = State::get();
    $cities = City::get();

    $cartItems = Cart::where('user_id', $userId)->get();
    $productIds = $cartItems->pluck('product_id');
    $productTitles = Product::whereIn('id', $productIds)->pluck('title');

    return view('frontend.elements.checkout', compact('countries', 'states', 'cities', 'productTitles','userId','productIds'));
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

    public function user_message(Request $request){
        $store = User_message::create([
            'name'=> $request -> name,
            'email'=> $request -> email,
            'message'=> $request -> message,

        ]);
        return json_encode([
            'Error' => false,
            'Message' => 'Message Saved successfully'
        ]);

    }
    public function forgot_password_page(){
        return view('frontend.pages.forgot-password');
    }
    public function VerifyPage(){

        return view('frontend.pages.verify');
    }
public function newPassword(){

    return view('frontend.pages.new-password');

}

}
