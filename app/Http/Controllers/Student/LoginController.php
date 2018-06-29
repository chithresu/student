<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginform()

    {
        return view('auth.login');
    }

    public function loginauth(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // if (\Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect()->intended('studentform');
        // }

        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            return redirect()->intended('studentform');
        }
    }

    public function logout()
    {
        \Auth::logout();
    }
}
