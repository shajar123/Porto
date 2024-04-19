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

    public function blog_edit_create(Request $request){
        $update= Blogs::where('id',$request->id)->update([

            'title'=>$request->title,
            'description'=>$request->description,
            'image' => $this->saveFiles($request->image,'Blogs'),
        ]);
    return response()->json(['success' => 'Data stored successfully']);

    }

    public function  blog_delete(Request $request){
        $record = $request->input('id');

        // Find the record
        $record = Blogs::find($record);

        // Check if the record exists
        if (!$record) {
            return response()->json(['error' => 'Record not found'], 404);
        }

        // Delete the record
        $record->delete();
        dd($record);

        // Return success response
        return response()->json(['message' => 'Record deleted successfully']);


    }


}
