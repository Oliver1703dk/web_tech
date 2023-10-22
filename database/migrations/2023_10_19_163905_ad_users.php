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
        Schema::create('ad_Users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Email");
            $table->string('Password');
            $table->integer("Phone_Number");
            $table->boolean("admin");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
