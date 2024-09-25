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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->decimal("price");
            $table->text("benefits");
            $table->text("ingredient");
            $table->text("addations");
            $table->integer("stock");  
            $table->string("image1");
            $table->string("image2");
            $table->string("image3");
            $table->string("image4");
            $table->decimal("rate");
            $table->string("discount_prcentage");
            $table->text("video_link")->nullable();
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
        Schema::dropIfExists('products');
    }
};
