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
        $user = User::where('email', $request->email)->first();

        if ($user) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if ($user->user_type == 0) {
                    $message = 'Admin logged in successfully.';
                } else {
                    $message = 'User Logged in successfully';
                }
                return json_encode([
                    'Error' => false,
                    'Message' => $message,
                    'user_type' => $user->user_type
                ]);

            } else {
                return json_encode([
                    'Error' => true,
                    'Message' => 'Invalid Password'
                ]);
            }
        } else {
            return json_encode([
                'Error' => true,
                'Message' => 'email not found'
            ]);
        }
    }







}
