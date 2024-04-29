<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function admin_footer(){
        $footer =Footer::first();
        return view('admin.sidebar.footer',compact('footer'));
    }

    public function admin_footer_create(Request $request){


        $footer = Footer::first();
        if ($footer) {
            $footer->update([

            'address'=> $request->address,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'facebook'=> $request->facebook,
            'twitter'=> $request->twitter,
            'instagram'=> $request->instagram,
            ]);
        } else {
            Footer::create([

            'address'=> $request->address,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'facebook'=> $request->facebook,
            'twitter'=> $request->twitter,
            'instagram'=> $request->instagram,
            ]);
        }

        return response()->json(['success'=>'Footer Has Been Saved Successfully']);
    }
}
