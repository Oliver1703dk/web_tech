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
            $table->string('name');
            $table->string('description');
            $table->integer('quantity');
            $table->decimal('price');
            $table->string('product_info1');
            $table->string('product_info2');
            $table->string('product_info3');
            $table->string('product_info4');
            // Add other product fields here
            $table->timestamps();
//            $table->unsignedBigInteger('category_id')->unique();
//            $table->foreign('category_id')->references('id')->on('categorys');
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
