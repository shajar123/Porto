<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getProducts()
    {
        $products = Product::get();


        return view('admin.sidebar.products.product', compact('products'));
    }
    public function createProducts()
    {
        $categories = Category::get();
        $colors = Color::get();
        $sizez = Size::get();
        return view('admin.sidebar.products.addproduct', compact('categories', 'colors', 'sizez'));
    }
    public function editProducts($slug)
    {

        $product = Product::where('slug', $slug)->first();
        $categories = Category::get();
        $colors = Color::get();
        $sizez = Size::get();
        return view('admin.sidebar.products.editproducts', compact('product', 'categories','colors','sizez'));
    }
    public function add(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
            'category_id'=>['required'],
            'color_id'=>['required'],
            'size_id'=>['required'],
            'sale_price'=>['required'],
            'price'=>['required'],
            


        ]);

        $create = Product::create([

            'title' => $request->title,
            'category_id' => json_encode($request->category_id),
            'color_id' => json_encode($request->color_id),
            'size_id' => json_encode($request->size_id),
            'image' => saveFiles($request->image, 'products_images'),
            'description' => $request->description,
            'sale_price' => $request->sale_price,
            'price' => $request->price,


        ]);

        return json_encode([
            'Error' => false,
            'Message' => 'Products added successfully'
        ]);
    }
    public function update(Request $request)
    {
        
        $validate = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'category_id' => ['required'],
            'size_id' => ['required'],
            'sale_price' => ['required'],
            'price' => ['required'],
            'color_id' => ['required'],
            

            



        ]);
        $data = [
            'title' => $request->title,
            'description'=>$request->description,
            'category_id' => json_encode($request->category_id),
            'color_id' => json_encode($request->color_id),
            'size_id' => json_encode($request->size_id),
            'sale_price' => $request->sale_price,
            'price' => $request->price,

        ];
        
        if ($request->has('image')) {
            $get_image = Product::where('id', $request->id)->first();
            if (file_exists(public_path($get_image->image))) {
                // Delete the file
                unlink(public_path($get_image->image));
            }
            $data['image'] = saveFiles($request->image, 'products_images');
        }
        $update = Product::where('id', $request->id)->update($data);


        return json_encode([
            'Error' => false,
            'Message' => 'Products updated successfully'
        ]);
    }
    public function delete(Request $request)
    {
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
