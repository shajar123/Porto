<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\Orderitem;

use App\Models\Cart;
use App\Models\User;

use App\Models\Product;




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
        ]);
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $productId = $cartItem->product_id;
            $product = Product::find($productId);

            if ($product) {

                $totalPrice += $product->sale_price;
            }
        }
        $orders = Order::create([
            'user_id' => $userId,
            'total_amount' => $totalPrice,

        ]);
        $products = Product::all();

        foreach ($products as $product) {
            OrderItem::create([
                'order_id' => $orders->id,
                'product_id' => $product->id,
            ]);
        }

        return json_encode([
            'Error' => false,
            'Message' => 'Checkout added successfully'
        ]);

    }



public function order_status(Request $request){
    $order = Order::findOrFail($request->order_id);
        $order->status = $request->status;
        $order->save();
    return json_encode([
        'Error' => false,
        'Message' => 'Status added successfully'
    ]);
}

    public function orders(){
        $orders =Order::all();
        return view('admin.sidebar.orders',compact('orders'));
    }


public function admin_orders($id) {
    $orderItems = OrderItem::where('order_id', $id)->get();

    $productDetails = [];

    foreach ($orderItems as $orderItem) {
        $product = Product::find($orderItem->product_id);


        if ($product) {
            $productDetails[] = $product;
        }
    }


    return view('admin.sidebar.admin-orders', compact('productDetails'));
}


public function order_items(){

    $orderitems=Orderitem::all();
    return view('admin.sidebar.order-items',compact('orderitems'));
}
}




