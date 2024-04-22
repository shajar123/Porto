<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function getColors(){
        $colors= Color::get();
        return view('admin.sidebar.variants.color',compact('colors'));
    }
    public function add(Request $request){
        $validate = $request->validate([
            'name' => ['required'],


        ]);

        $create = Color::create([

            'name' => $request->name,

        ]);

        return json_encode([
            'Error' => false,
            'Message' => 'Color added successfully'
        ]);

    }
    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],



        ]);


        $update = Color::where('id', $request->id)->update([
            'name' => $request->name,
            
        ]);


        return json_encode([
            'Error' => false,
            'Message' => 'Colors updated successfully'
        ]);
    }
    public function delete(Request $request){
        $delete = Color::where('id', $request->id)->delete();


        return json_encode([
            'Error' => false,
            'Message' => 'Color deleted successfully'
        ]);
    }
}
