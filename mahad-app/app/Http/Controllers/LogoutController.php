<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect('/login'); // Redirect to home or any other page after logout
    }
}
