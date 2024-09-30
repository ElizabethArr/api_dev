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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Add name column
            $table->string('last_name');  // Add email column and make it unique
            $table->string('email')->unique();
            $table->string('birth_date');
            $table->string('personal_phone');
            $table->string('contact_phone');
            $table->string('password');
            $table->string('zip_code');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};