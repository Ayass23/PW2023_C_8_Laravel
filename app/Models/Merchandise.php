<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis',
        'stok',
        'harga',
        'gambar',
    ];

    public function transactions()
    {
        return $this->hasMany(MerchanTransaction::class, 'merch_id');
    }
}
