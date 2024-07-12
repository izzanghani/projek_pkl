<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama','no_telepon', 'alamat'];
    // protected $table = ['Suppliers'];
    public $timestamps = true;

    //relasi ke tabel telepon
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_supplier');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_supplier');
    }
}
