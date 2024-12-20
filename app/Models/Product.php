<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Defining the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'oldPrice',
        'quantity',
        'sku',
        'category_id',
        'image',
        'is_active',
    ];

    // Hiding sensitive fields when converting the model to JSON
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

  
}
