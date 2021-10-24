<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $item = TravelPackage::with(['galleries'])->get();
        return view('pages.home', [
            'items' => $item
        ]);
    }
}
