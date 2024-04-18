<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function attemptLogin(Request $request)
    {

        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        $type = 0;
        if ($request->email == 'admin@admin.com') {
            $type = 1;
        }

        if ($type == 0) {
            $user = Customer::where('email', $request->email)->first();
        } else {
            $user = User::where('email', $request->email)->first();
        }


        if ($user) {

            if ($type == 1) {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    return json_encode([
                        'Error' => false,
                        'Message' => 'Logged in successfully',
                        'type' => $type
                    ]);
                } else {
                    return json_encode([
                        'Error' => true,
                        'Message' => 'Email or Password is incorrect.'
                    ]);
                }
            } else {
                if (Hash::check($request->password, $user->password)) {
                    auth('customer')->login($user);
                    return json_encode([
                        'Error' => false,
                        'Message' => 'Logged in successfully',
                        'type' => $type
                    ]);
                } else {
                    return json_encode([
                        'Error' => true,
                        'Message' => 'Email or Password is incorrect.'
                    ]);
                }
            }
        } else {
            return json_encode([
                'Error' => true,
                'Message' => 'User not found'
            ]);
        }
    }

}
