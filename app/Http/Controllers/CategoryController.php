<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(){
        $categories= Category::get();
        return view('admin.sidebar.category',compact('categories'));
    }

    public function add(Request $request){
        $validate = $request->validate([
            'title' => ['required'],
            'image'=>['required']

        ]);

        $create = Category::create([

            'title' => $request->title,
            'image' => saveFiles($request->image, 'category_images')

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
            $get_image = Category::where('id', $request->id)->first();
            if (file_exists(public_path($get_image->image))) {
                // Delete the file
                unlink(public_path($get_image->image));
            }
            $data['image'] = saveFiles($request->image, 'category_images');
        }
        $update =Category::where('id', $request->id)->update($data);


        return json_encode([
            'Error' => false,
            'Message' => 'Category updated successfully'
        ]);
    }
    public function delete(Request $request){
        $delete = Category::where('id', $request->id)->first();

        if (file_exists(public_path($delete->image))) {
            unlink(public_path($delete->image));
        }

        $delete->delete();
        return json_encode([
            'Error' => false,
            'Message' => 'Category deleted successfully'
        ]);
    }
}
