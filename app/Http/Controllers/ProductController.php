<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getProducts(){
        $products= Product::get();
        $categories=Category::get();
        $colors=Color::get();
        $sizez=Size::get();
        return view('admin.sidebar.product',compact('products','categories','colors','sizez'));
    }
    public function add(Request $request){
        $validate = $request->validate([
            'title' => ['required'],
            'image'=>['required'],
            'description'=>['required'],


        ]);

        $create = Product::create([

            'title' => $request->title,
            'image' => saveFiles($request->image, 'products_images')

        ]);

        return json_encode([
            'Error' => false,
            'Message' => 'Category added successfully'
        ]);

    }
    public function update(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required'],



        ]);
        $data = [
            'title' => $request->title,

        ];
        if ($request->has('image')) {
            $get_image = Product::where('id', $request->id)->first();
            if (file_exists(public_path($get_image->image))) {
                // Delete the file
                unlink(public_path($get_image->image));
            }
            $data['image'] = saveFiles($request->image, 'products_images');
        }
        $update =Product::where('id', $request->id)->update($data);


        return json_encode([
            'Error' => false,
            'Message' => 'Products updated successfully'
        ]);
    }
    public function delete(Request $request){
        $delete = Product::where('id', $request->id)->first();

        if (file_exists(public_path($delete->image))) {
            unlink(public_path($delete->image));
        }

        $delete->delete();
        return json_encode([
            'Error' => false,
            'Message' => 'Products deleted successfully'
        ]);
    }
}
