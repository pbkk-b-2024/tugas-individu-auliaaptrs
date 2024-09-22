<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'telpon',
        'role_id', // Perbarui kolom menjadi role_id
    ];

    protected $table = 'pengguna'; // Pastikan nama tabel sesuai dengan konvensi Laravel

    // Relasi dengan model Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
