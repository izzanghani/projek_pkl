<?php

namespace App\Http\Controllers;

use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }


    public function create()
    {
        return view('supplier.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);

        $supplier = new Supplier();
        $supplier->nama = $request->nama;
        $supplier->no_telepon = $request->no_telepon;
        $supplier->alamat = $request->alamat;
        $supplier->save();

        return redirect()->route('supplier.index');
    }


    public function show(Supplier $supplier)
    {
        //
    }


    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',

        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->nama = $request->nama;
        $supplier->no_telepon = $request->no_telepon;
        $supplier->alamat = $request->alamat;

        $supplier->save();
        return redirect()->route('supplier.index');
    }


    public function destroy(Supplier $supplier)
    {

        $supplier->delete();
        return redirect()->route('supplier.index')
                         ->with('succes', 'Supplier delete succesfully');
    }
}
