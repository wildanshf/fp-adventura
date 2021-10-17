<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        // $user = User::where('email','=', $request->email)->first();
        // if (!$user){
        //     return back()->with('LoginError', 'Username Cacat!');
        // }
        // else {
        //     if(Hash::check($request->password, $user->password)){

        //         $request->session()->put('Login', $user->name);
        //         return redirect('/');
        //         // echo session('Login');
        //     }
        //     else {
        //         return back()->with('LoginError', 'Password Cacat!');
        //     }
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}