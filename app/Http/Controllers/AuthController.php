<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use App\Models\State;
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
                    return json_encode([
                        'Error' => false,
                        'Message' => $message,
                        'user_type' => $user->user_type
                    ]);
                }


                else {
                    $message = 'Email 0r Password is incorrect';
                    return json_encode([
                        'Error' => true,
                        'Message' => $message,
                        'user_type' => $user->user_type
                    ]);

                }
                return json_encode([
                    'Error' => true,
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





    public function user_login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        $user = User::where('email', $request->email)->first();

        if ($user) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if ($user->user_type == 1) {
                    $message = 'logged in successfully.';
                    return json_encode([
                        'Error' => false,
                        'Message' => $message,
                        'user_type' => $user->user_type
                    ]);
                }


                else {
                    $message = 'Email 0r Password is incorrect';
                    return json_encode([
                        'Error' => true,
                        'Message' => $message,
                        'user_type' => $user->user_type
                    ]);

                }
                return json_encode([
                    'Error' => true,
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
    public function createRegister(Request $request)
    {
        $create = User::create([
            'user_type'=> 1,
            'name' => $request->name,
            'email' => $request->email,
            'password'=>Hash::make($request->password),
            'country'=>$request->country,
            'city'=>$request->city,
            'state'=>$request->state,
        ]);
        return json_encode([
            'Error' => false,
            'Message' => 'Register successfully'
        ]);
    }
    public function selectCountry(Request $request)

{

        $states = State::where('country_id', $request->country)->get();
        $html = '';
        if (count($states) > 0) {
            foreach ($states as $state) {
                $html .= '  <option value="' . $state->id . '">' . $state->name . '</option>';
            }
        } else {
            $html .= '  <option value="" selected disabled readonly="">--Select--</option>';
        }

        return json_encode([
            'Error' => false,
            'html' => $html
        ]);
    }
    public function selectState(Request $request)

    {

            $city = City::where('state_id', $request->city)->get();
            $html = '';
            if (count($city) > 0) {
                foreach ($city as $c) {
                    $html .= '  <option value="' . $c->id . '">' . $c->name . '</option>';
                }
            } else {
                $html .= '  <option value="" selected disabled readonly="">--Select--</option>';
            }

            return json_encode([
                'Error' => false,
                'html' => $html
            ]);
        }



}
