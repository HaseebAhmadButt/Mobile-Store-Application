<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class userAuthFormController extends Controller
{
    function registerUser(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => "string|required",
            'email' => "string|required|email|unique:users,email",
            'password' => 'string|min:8|confirmed'
        ]);
        if (!$validation) {
            return view('authFolder.register', ['registered' => false]);
        }
        User::create(['name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password'))]);
        $hashedKey = Hash::make($request->input('email'));
        $hiddenCode = Hash::make(substr($request->input('password'), 50, 4));
        Cache::put($hashedKey, $hiddenCode);
        return view('authFolder.verifyEmail', ['accountCreated'=>true]);
    }
}
