<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function login(Request $request): View {
        return view('auth.login');
    }

    public function auth(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'You are now logged in!');
        }

        return back()->withErrors([
            'email' => 'Credentials are not valid.'
        ])->withInput($request->only('email'));
    }
}
