<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        $kategori =  Kategori::all();
        $supplier = Supplier::all();
        return view('produk.create', compact('kategori', 'supplier'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',

        ]);

        $produk = new produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->id_kategori = $request->id_kategori;
        $produk->id_supplier = $request->id_supplier;

        $produk->save();


        return redirect()->route('produk.index');
    }


    public function show(produk $produk)
    {

    }


    public function edit($id)
    {
        $kategori =  Kategori::all();
        $supplier = Supplier::all();
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk','kategori','supplier'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
            'harga' => 'required',

        ]);

        $produk = produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->id_kategori = $request->id_kategori;
        $produk->id_supplier = $request->id_supplier;

        $produk->save();
        return redirect()->route('produk.index');
    }

    public function destroy(produk $produk)
    {
        {
            $produk = Produk::findOrFail($id);

            $produk->delete();
            return redirect()->route('produk.index');
        }
    }
}
