<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{

    public function checkout_form(Request $request){
        $validate = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'postcode' => ['required'],
        ]);

        $create = Checkout::create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'product_id' => json_encode($request->product_id),
            'user_id' => $request->user_id,
        ]);

        return json_encode([
            'Error' => false,
            'Message' => 'Checkout added successfully'
        ]);

    }
}
