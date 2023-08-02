<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangMasuk extends Model
{
    use HasFactory;

    public function produks()
    {
        return $this->belongsTo(Produk::class);
    }
}
