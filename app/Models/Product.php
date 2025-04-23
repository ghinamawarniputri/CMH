<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        // 'description',
        'images',
        'price',
        'visibility',
        'shopee_link',
        'whatsapp_default_message',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
