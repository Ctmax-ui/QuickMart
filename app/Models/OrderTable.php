<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordered_user_id',
        'payment_method',
        'order_status',

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

        'ordered_items_arr',
        'items_quantity_arr',
        'total_price_arr',
    ];
}
