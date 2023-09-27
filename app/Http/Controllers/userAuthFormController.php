<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\accoutnVerificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\accountVerificationMail;
use Illuminate\Support\Facades\Cookie;
use Laravel\Socialite\Facades\Socialite;

class userAuthFormController extends Controller
{
    function registerUser(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => "string|required",
            'email' => "string|required|email|unique:users,email",
            'password' => 'string|min:8|confirmed'
        ]);
        if ($validation->fails()) {
            return view('authFolder.register', ['registered' => false, 'validForm' => false, 'accountExists' => false]);
        }
        $password = Hash::make($request->input('password'));
        $email = $request->input('email');
        try {
            User::create(
                [
                    'name' => $request->input('name'),
                    'email' => $email,
                    'password' => $password,
                    'is_member' => true,
                    'is_admin' => false
                ]
            );
        } catch (\Exception $e) {
            return view('authFolder.register', ['registered' => false, 'validForm' => true, 'accountExists' => true]);
        }

        // $hashedKey = Hash::make($email);
        $hiddenCode = substr($password, 50, 6);
        Cache::put($email, $hiddenCode);
        Mail::to($email)->send(new accountVerificationMail(
            [
                'title' => 'Account Verification Email',
                'Body' => 'This your account verification 6 character code is - ' . $hiddenCode
            ]
        ));
        return response(view('authFolder.verifyEmail', ['accountCreated' => true, 'incorrectCode' => false]))
            ->withCookie('user_account', $email, 5);
    }


    function logInValidation(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => "string|required|email|unique:users,email",
            'password' => 'string|min:8|confirmed'
        ]);
        if ($validation->fails()) {
            return view('authFolder.logIn', ['registered' => false, 'validForm' => false, 'accountExists' => false]);
        }
        $password = Hash::make($request->input('password'));
        $email = $request->input('email');
        try {
            
        } catch (\Exception $e) {
            return view('authFolder.register', ['registered' => false, 'validForm' => true, 'accountExists' => true]);
        }

        // $hashedKey = Hash::make($email);
        $hiddenCode = substr($password, 50, 6);
        Cache::put($email, $hiddenCode);
        Mail::to($email)->send(new accountVerificationMail(
            [
                'title' => 'Account Verification Email',
                'Body' => 'This your account verification 6 character code is - ' . $hiddenCode
            ]
        ));
        return response(view('authFolder.verifyEmail', ['accountCreated' => true, 'incorrectCode' => false]))
            ->withCookie('user_account', $email, 5);
    }

    function emailVerification(Request $request){
        $val = Validator::make($request->all(), [
            'verification_Code' => 'string|min:6|max:6|required'
        ]);

        if ($val->fails()) {
            dd($request->all());
           return view('authFolder.verifyEmail', ['accountCreated' => false, 'incorrectCode' => true]);
        }
        $hashed_mail = $request->cookie('user_account');
        $cache_value = Cache::get($hashed_mail);
        if($cache_value == $request->input('verification_Code')){
            $user = User::where('email', $hashed_mail)->first();
            $user->email_verified_at = now();
            $user->save();
            return response(redirect('/'))->withCookie(Cookie::forget('user_account'));
        }
        return view('authFolder.verifyEmail', ['accountCreated' => false, 'incorrectCode' => true]);
    }

    //------------------- Google Registration ---------------------

    function googleLogIn(){
        return Socialite::driver('google')->redirect();
    }

    function googleCallBack(){
        $user = Socialite::driver('google')->user();
        try {
            $time = now();
            User::create(
                [
                    'name' =>  $user->user['name'],
                    'email' => $user->user['email'],
                    'email_verified_at' => $time,
                    'user_image'=> $user->user['picture'],
                    'is_member' => true,
                    'is_admin' => false,
                    'google_id' => $user->user['sub']
                ]
            );
            return redirect('/');
        } catch (\Exception $e) {
            return view('authFolder.register', ['registered' => false, 'validForm' => true, 'accountExists' => true]);
        }
    }

    //-------------------------------Facebook Registration----------------------------------
    function facebookLogIn(){
        return Socialite::driver('facebook')->redirect();
    }

    function facebookCallBack(){
        $user = Socialite::driver('facebook')->user();
        return response()->json($user);
        try {
            $time = now();
            User::create(
                [
                    'name' =>  $user->user['name'],
                    'email' => $user->user['email'],
                    'email_verified_at' => $time,
                    'user_image'=> $user->user['picture'],
                    'is_member' => true,
                    'is_admin' => false,
                    'google_id' => $user->user['sub']
                ]
            );
            return redirect('/');
        } catch (\Exception $e) {
            return view('authFolder.register', ['registered' => false, 'validForm' => true, 'accountExists' => true]);
        }
    }


}
