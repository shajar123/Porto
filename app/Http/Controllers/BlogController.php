<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function blogs_create(Request $request){
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
}
