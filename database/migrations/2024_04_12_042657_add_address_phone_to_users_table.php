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
        Schema::table('users', function (Blueprint $table) {
            //
        $table->string('address')->nullable();
        $table->string('phone_number')->nullable();
        $table->string('country')->nullable();
        $table->string('city')->nullable();
        $table->string('state')->nullable();
        $table->integer('postal')->nullable();
        $table->boolean('is_admin')->default(false);        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
    // public function down(): void
    // {
    //     Schema::table('users', function (Blueprint $table) {
    //         //
    //     });
    // }
};
