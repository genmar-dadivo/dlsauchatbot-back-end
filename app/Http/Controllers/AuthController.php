<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('api-token')->plainTextToken;
            return response()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function logout(Request $request)
    {
        $user = User::where('email', '=', urldecode($request->email))
            ->first();
        $user->tokens()->delete();
        if ($user) {
            return response()->json([
                'message' => 'Logout.',
                'cookie' => setcookie('token', '', time() - 3600, "/"),
                ], 200);
        }

        return response()->json([
            'error' => 'Error Occured',
        ], 401);
    }
}
