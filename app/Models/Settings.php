<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'weekly_sms',
        'monthly_sms',
    ];

    protected $casts = [
        'weekly_sms' => 'boolean',
        'monthly_sms' => 'integer',
    ];
}
