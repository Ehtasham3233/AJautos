<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_id',
        'registration_number',
        'make',
        'year_of_manufacture',
        'data',
        'mot_expiry_date',
        'mileage',
    ];

    protected $casts = [
        'data' => 'array',
        'year_of_manufacture' => 'integer',
        'mot_expiry_date' => 'date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function invoice()
    {
        return $this->hasOne(SaleInvoice::class, 'car_id', 'id');
    }
}
