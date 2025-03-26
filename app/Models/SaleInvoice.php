<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleInvoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'car_id',
        'details',
        'amount',
        'payment_type',
    ];

    protected $casts = [
        'details' => 'array',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
