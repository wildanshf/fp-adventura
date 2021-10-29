<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.user-profile.profile',[
            'items' => Transaction::where('users_id', auth()->user()->id)->get()
        ]);
    }

    public function show($id)
    {
        $item = Transaction::with([
            'details',
            'travel_package',
            'user',
        ])->findOrFail($id);

        return view('pages.user-profile.transaction', [
            'item' => $item
        ]);
    }
}


