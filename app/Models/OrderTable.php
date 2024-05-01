<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordertable extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordered_user_id',
        'first_name',
        'last_name',
        'email',
        'number',
        'address_one',
        'address_two',
        'country',
        'state',
        'city',
        'zip_code',
        'ordered_item',
        'total_quantity',
        'total_price',
    ];
}
