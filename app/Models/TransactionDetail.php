<?php

namespace App\Models;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    protected $fillable = [
        'travel_packages_id',
        'transactions_id',
        'username',
        'gender',
        'date_birth'
    ];

    protected $hidden = [
        
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

}
