<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'product_id', 'product_name', 'category', 'price',
        'email', 'full_name', 'phone', 'lyrics',
    ];
}
