<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function admin_footer(){
        return view('admin.sidebar.footer');
    }

    public function admin_footer_create(Request $request){

        $validate = $request->validate([
            'email' => ['required'],
            'address'=>['required'],
            'email'=>['required'],
            'facebook'=>['required'],
            'instagram'=>['required'],
            'twitter'=>['required'],
        ]);
        $store =Footer::create([

            'address'=> $request->address,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'facebook'=> $request->facebook,
            'twitter'=> $request->twitter,
            'instagram'=> $request->instagram,

        ]);
        return response()->json(['success'=>'Footer Has Been Saved Successfully']);
    }
}
