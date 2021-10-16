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
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $user = User::where('email','=', $request->email)->first();
        if (!$user){
            return back()->with('LoginError', 'Username Cacat!');
        }
        else {
            if(Hash::check($request->password, $user->password)){
                $request->session()->regenerate();
                return redirect('/');
            }
            else {
                return back()->with('LoginError', 'Password Cacat!');
            }
        }
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect('/');
        // }
        // dd('Berhasil login!');
    }
}