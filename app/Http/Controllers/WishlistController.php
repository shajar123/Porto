<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\User;



class WishlistController extends Controller
{
            public function wishlist(Request $request) {
                $userId = $request->input('user_id');
                $productId = $request->input('product_id');
                $existingWishlist = Wishlist::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();
                   if ($existingWishlist) {

                   return response()->json(['message' => 'Product already exists in your wishlist'], 422);
                   }
                $wishlist = new Wishlist();
                $wishlist->user_id = $userId;
                $wishlist->product_id = $productId;
                $wishlist->save();
                return json_encode([
                    'Error' => false,
                    'Message' => 'wishlist  successfully'
                ]);
    }

}
