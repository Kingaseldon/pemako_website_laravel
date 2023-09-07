<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
      public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $request->user()->createToken('accessToken');
            $user->token = $token->plainTextToken;

;
            return response()->json(['message' => 'success', 'user' => $user]);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }



}
