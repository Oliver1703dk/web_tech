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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //$table ->String('name');
            $table ->String('email');
            $table ->integer('phone');
            //$table ->String('address');
            $table ->String('password');
            $table ->boolean('admin');

            $table->unsignedBigInteger('cart_id')->unique();
            $table->foreign('cart_id')->references('id')->on('carts');
        });
//        Schema::create('users', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');
//            $table->rememberToken();
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
