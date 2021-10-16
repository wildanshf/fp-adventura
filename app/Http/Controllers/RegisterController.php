<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:128',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:16',
            'phone' => 'required|max:128',
            'address' => 'required|max:128'
        ]);

        $validatedData['password'] = Hash::make($request->newPassword);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login');
    }
}
