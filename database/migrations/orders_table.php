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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("state");
            $table->string("time_to_recive");
            $table->string("num_order_items");
            $table->string(" order_total");
       
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on('users')->cascadeOnUpdate()->cascadeOnDelete();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
