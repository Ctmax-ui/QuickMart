<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_name',
        'p_image',
        'p_description',
        'p_brand',
        'p_price',
        'p_category',
        'p_quantity',
    ];
}
