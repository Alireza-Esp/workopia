<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function login(Request $request): View {
        return view('auth.login');
    }
}
