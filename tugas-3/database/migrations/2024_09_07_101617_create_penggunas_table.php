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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama'); // User's Name
            $table->string('email')->unique(); // User's Email (unique)
            $table->string('password'); // Password (hashed)
            $table->string('telpon'); // Phone Number
            $table->enum('role', [
                'ticketing', 'cafe_crew', 'staff_it', 'cleaning_service', 
                'security', 'technician', 'customer'
            ]); // Roles
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
