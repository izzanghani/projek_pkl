<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        confirmDelete('Delete','Are you sure?');
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        $kategori =  Kategori::all();
        $supplier = Supplier::all();
        return view('admin.produk.create', compact('kategori', 'supplier'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',

        ]);

        $produk = new produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;
        $produk->id_supplier = $request->id_supplier;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/produk', $name);
            $produk->cover = $name;
        }
        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
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
        return view('admin.produk.edit', compact('produk','kategori','supplier'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',

        ]);

        $produk = produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;
        $produk->id_supplier = $request->id_supplier;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/produk', $name);
            $produk->cover = $name;
        }
        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        Alert::success('success','Data nerhasil Dihapus');
        return redirect()->route('produk.index');
    }
}
