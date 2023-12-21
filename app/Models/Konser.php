<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'penyelenggara',
        'nama',
        'tanggal',
        'jam',
        'lokasi',
        'harga',
        'deskripsi',
        'poster',
        'jumlah',
    ];

    public function transactions()
    {
        return $this->hasMany(KonserTransaction::class, 'konser_id');
    }
}
