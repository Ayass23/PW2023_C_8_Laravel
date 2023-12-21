<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchanTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'merch_id',
        'nama_lengkap',
        'identitas',
        'nomor_identitas',
        'email',
        'no_telp',
        'quantity',
        'total',
    ];

    public function merch()
    {
        return $this->belongsTo(Merchandise::class, 'merch_id');
    }

    
}
