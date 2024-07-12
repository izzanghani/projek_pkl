<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Produk;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index()
    {
         $transaksi = Transaksi::all();
        confirmDelete('Delete','Are you sure?');
        return view('admin.transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $kategori =  Kategori::all();
        $supplier = Supplier::all();
        $produk =  Produk::all();
        return view('admin.transaksi.create', compact('kategori', 'supplier', 'produk'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([


        ]);

        $transaksi = new Transaksi();
        $transaksi->id_kategori = $request->id_kategori;
        $transaksi->id_supplier = $request->id_supplier;
        $transaksi->id_produk = $request->id_produk;

        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
         $transaksi->save();


        return redirect()->route('transaksi.index');
    }

    public function show(Transaksi $transaksi)
    {
        //
    }

    public function edit($id)
    {
        $kategori =  Kategori::all();
        $supplier = Supplier::all();
        $produk = Produk::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.edit', compact('transaksi','kategori','supplier','produk'));
    }


    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_kategori = $request->id_kategori;
        $transaksi->id_supplier = $request->id_supplier;
        $transaksi->id_produk = $request->id_produk;


        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        Alert::success('success','Data nerhasil Dihapus');
        return redirect()->route('transaksi.index');
    }
}
