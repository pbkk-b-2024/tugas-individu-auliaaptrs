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
        // Migrasi untuk tabel roles
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('nama_role'); // Nama role
            $table->timestamps();
        });

        // Migrasi untuk tabel pengguna
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama'); // User's Name
            $table->string('email')->unique(); // User's Email (unique)
            $table->string('password'); // Password (hashed)
            $table->string('telpon'); // Phone Number
            $table->foreignId('role_id')->nullable()->constrained('role')->onDelete('set null'); // Foreign Key for Role
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel pengguna terlebih dahulu
        Schema::dropIfExists('pengguna');
        // Menghapus tabel roles terakhir
        Schema::dropIfExists('role');
    }
};
