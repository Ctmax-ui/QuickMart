<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_tables', function (Blueprint $table) {
            $table->id();
            $table->string('ordered_user_id');
            $table->string('order_status');
            $table->string('payment_method');

            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('number');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip_code');


            $table->string('ordered_items_arr');
            $table->string('items_quantity_arr');
            $table->string('total_price_arr');

            $table->string('subtotal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tables');
    }
};
