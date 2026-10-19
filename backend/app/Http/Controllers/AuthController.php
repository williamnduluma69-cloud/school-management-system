<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function login()
    {
        return response()->json(['message' => 'login: bado haijakamilika']);
    }
}
