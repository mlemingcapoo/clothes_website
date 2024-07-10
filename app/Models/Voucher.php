<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';

    protected $fillable = [
        'code',
        'discount_percentage',
        'description',
        'min_price',
        'quantity',
        'start_date',
        'end_date',
        'status'
    ];
}
