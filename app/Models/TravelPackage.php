<?php

namespace App\Models;

// use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'duration',
        'tripDate'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
