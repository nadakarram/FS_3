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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("offer_image1");
            $table->string("offer_image2");
            $table->decimal("price");
            $table->text("desc");
            $table->integer("stock");  
            $table->string("discount_prcentage");
            $table->string("start_data");
            $table->string("end_data")->default("While supplies last");
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
