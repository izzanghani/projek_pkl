<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id','id_kategori','id_supplier','id_produk'];
    protected $visible = ['id','id_kategori','id_supplier','id_produk'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
