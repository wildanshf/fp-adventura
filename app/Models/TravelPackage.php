<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'tripType',
        'description',
        'price',
        'accomodation',
        'transportation',
        'eat',
        'duration',
        'dateTrip'
    ];

    protected $hidden = [

    ];
}
