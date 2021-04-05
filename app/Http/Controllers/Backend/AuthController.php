<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.login');
    }

    public function showRegisterForm()
    {
        return view('frontend.register');
    }
}
