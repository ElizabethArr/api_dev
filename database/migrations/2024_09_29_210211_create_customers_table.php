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
            $table->string('last_name')->unique();  // Add email column and make it unique
            $table->string('email')->unique();
            $table->string('birth_date')->unique();
            $table->string('personal_phone')->unique();
            $table->string('contact_phone')->unique();
            $table->string('password')->unique();
            $table->string('zip_code')->unique();
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