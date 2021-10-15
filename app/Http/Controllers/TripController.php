<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        return view('trips', [
            "title" => "Trips",
            "Trips" => Trip::all()
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Trip $trip)
    {

    }

    public function edit(Trip $trip)
    {
        
    }

    public function update(Request $request, Trip $trip)
    {
        //
    }

    public function destroy(Trip $trip)
    {
        //
    }
}
