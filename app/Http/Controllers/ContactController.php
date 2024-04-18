<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_create(Request $request){
        $store = Contact::create([
            'address'=> $request ->address,
            'phone'=> $request ->phone,
            'email'=> $request ->email,


        ]);
        return response()->json(['success'=>'Data Has Been Saved Successfully']);
    }
}
