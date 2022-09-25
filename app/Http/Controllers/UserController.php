<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);

        if ($user)
            return response()->json([
                'message' => 'user registered successfully'
            ], Response::HTTP_CREATED);

        return response()->json([
            'message' => 'registration failed'
        ], Response::HTTP_BAD_REQUEST);
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();
            $token = $user->createToken('MyAPIToken')->accessToken;

            return \response()->json([
                'message' => 'login success',
                'data' => [
                    'token' => $token
                ]
            ], Response::HTTP_OK);
        }

        return \response()->json([
            'message' => 'login failed',
        ], Response::HTTP_NOT_FOUND);
    }
}
