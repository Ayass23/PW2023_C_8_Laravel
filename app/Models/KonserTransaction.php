<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonserTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'konser_id',
        'nama_lengkap',
        'identitas',
        'nomor_identitas',
        'email',
        'no_telp',
        'quantity',
        'total',
    ];

    public function konser()
    {
        return $this->belongsTo(Konser::class, 'konser_id');
    }
    
}
