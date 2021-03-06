<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ClientOrderItem extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'amount',
        'price',
        'discount',
        'total_price'
    ];
}
