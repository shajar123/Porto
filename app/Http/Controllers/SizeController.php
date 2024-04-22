<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function getSize(){
        $size= Size::get();
        return view('admin.sidebar.variants.Size',compact('size'));
    }
    public function add(Request $request){
        $validate = $request->validate([
            'name' => ['required'],


        ]);

        $create = Size::create([

            'name' => $request->name,

        ]);

        return json_encode([
            'Error' => false,
            'Message' => 'Size added successfully'
        ]);

    }
    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],



        ]);


        $update = Size::where('id', $request->id)->update([
            'name' => $request->name,
        ]);


        return json_encode([
            'Error' => false,
            'Message' => 'Size updated successfully'
        ]);
    }
    public function delete(Request $request){
        $delete = Size::where('id', $request->id)->delete();


        return json_encode([
            'Error' => false,
            'Message' => 'Size deleted successfully'
        ]);
    }
}
