<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }


    public function create()
    {
        return view('kategori.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',

        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();

        return redirect()->route('kategori.index');
    }


    public function show(Kategori $kategori)
    {
        //
    }


    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',

        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();
        return redirect()->route('kategori.index');
    }


    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
