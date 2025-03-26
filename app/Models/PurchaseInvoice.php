<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseInvoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'supplier_id',
        'part_invoice_number',
        'amount',
        'quantity',
        'details',
        'car_registration_number',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
