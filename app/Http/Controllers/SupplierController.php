<?php

namespace App\Http\Controllers;

use App\Models\Supplier;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        confirmDelete('Delete','Are you sure?');
        return view('admin.supplier.index', compact('supplier'));
    }


    public function create()
    {
        return view('admin.supplier.create');
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

        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        return redirect()->route('supplier.index');
    }


    public function show(Supplier $supplier)
    {
        //
    }


    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit', compact('supplier'));
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

        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        $supplier->save();
        return redirect()->route('supplier.index');
    }


    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        Alert::success('success','Data nerhasil Dihapus');
        return redirect()->route('supplier.index');
    }
}
