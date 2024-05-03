<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function blogs_create(Request $request){
        $validate = $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'image'=>['required'],

        ]);
        $store = Blogs::create([
            'title' =>$request ->title,
            'description' =>$request ->description,
            'image'=>$this->savefiles($request->image, 'Blogs'),
        ]);
        return response()->json(['message'=>'Data Has Been Saved Successfully']);

    }
    function saveFiles($file, $path)
    {
        $FileName = "";
        if (!empty($file)) {
            $FileName = time() + rand(111, 999) . '.' . $file->extension();
            $file->storeAs('public/' . $path, $FileName);
            $FileName = 'storage/' . $path . '/' . $FileName;

        }

        return $FileName;
    }

    public function blog_edit_create(Request $request){
        $validate = $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'image'=>['required'],

        ]);
        $update= Blogs::where('id',$request->id)->update([

            'title'=>$request->title,
            'description'=>$request->description,
            'image' => $this->saveFiles($request->image,'Blogs'),
        ]);
    return response()->json(['success' => 'Data stored successfully']);

    }


    public function blog_delete(Request $request){
        $delete = Blogs::where('id', $request->id)->delete();


        return json_encode([
            'Error' => false,
            'Message' => 'Color deleted successfully'
        ]);
    }


}
