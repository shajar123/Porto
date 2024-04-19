<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(){
        return view('admin.sidebar.category');
    }

    public function add(Request $request){
        $validate = $request->validate([
            'title' => ['required'],
            'image'=>['required']

        ]);

        $create = Category::create([

            'title' => $request->title,
            'sale_price' => $request->sale_price,
            'price' => $request->price,
            'image' => saveFiles($request->image, 'category_images')

        ]);

        return json_encode([
            'Error' => false,
            'Message' => 'Category added successfully'
        ]);

    }
}
