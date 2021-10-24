<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
        ]);
    }
}
