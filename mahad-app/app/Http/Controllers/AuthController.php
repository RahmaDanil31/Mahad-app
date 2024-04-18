<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {

            Auth::login($user);

            if ($user->hasRole('Admin')) {

                return redirect()->intended('/admin/dashboard');
            } elseif ($user->hasRole('Mahasiswa')) {
                return redirect()->intended('/user');;
            } else {
                return redirect('/dashboard');
            }

            return redirect('/dashboard'); // Ganti '/dashboard' dengan route yang sesuai
        }

        return redirect('/login')->with('loginError', 'Email atau password salah');
    }
}
