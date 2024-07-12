<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','stok','harga','id_kategori','id_supplier','cover'];
    protected $visible = ['id','nama_produk','stok','harga','id_supplier','cover'];
    //relasi ke tabel telepon
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_transaksi');
    }
    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/produk' . $this->cover))){
            return unlink(public_path('images/produk' . $this->cover));
        }
    }

}
