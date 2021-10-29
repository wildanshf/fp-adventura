<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class UserTransactionController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.transaction', [
            'items' => Transaction::where('users_id', auth()->user()->id)->get()
        ]);
    }
}
