<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_role',
    ];

    protected $table = 'role'; // Nama tabel sesuai dengan migrasi

    // Relasi dengan model Pengguna
    public function pengguna()
    {
        return $this->hasMany(Pengguna::class, 'role_id');
    }

    /**
     * Scope a query to search roles by a given search term.
     *
     * @param Builder $query
     * @param string $searchTerm
     * @return Builder
     */
    public function scopeSearch(Builder $query, $searchTerm)
    {
        return $query->where('nama_role', 'like', '%' . $searchTerm . '%');
    }
}
