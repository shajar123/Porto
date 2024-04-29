<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function cart(Request $request) {
        $userId = $request->input('user_id');
        $productId = $request->input('product_id');
        $existingWishlist = Cart::where('user_id', $userId)
        ->where('product_id', $productId)
        ->first();

           if ($existingWishlist) {
           return response()->json(['message' => 'Product already exists in your wishlist'], 422);
           }
        $wishlist = new Cart();
        $wishlist->user_id = $userId;
        $wishlist->product_id = $productId;
        $wishlist->save();
}

}
