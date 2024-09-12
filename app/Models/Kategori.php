<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_kategori'];
   
    public $timestamps = true;

    //relasi ke tabel telepon
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_kategori');
    }
}
