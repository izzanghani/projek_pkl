@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h5>transaksi</h5>
                        </div>
                        <div class="float-end">
                            <a href="" class="btn btn-sm btn-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="">supplier</label>
                                <select name="id_supplier" id="" class="form-control">
                                    @foreach ($supplier as $item)
                                        <option value="{{$item->id}}" {{$item->id == $transaksi->id_supplier ? 'selected': ''}}>{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">kategori</label>
                                <select name="id_kategori" id="" class="form-control">
                                    @foreach ($kategori as $item)
                                        <option value="{{$item->id}}" {{$item->id == $transaksi->id_kategori ? 'selected': ''}}>{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">produk</label>
                                <select name="id_produk" id="" class="form-control">
                                    @foreach ($produk as $item)
                                        <option value="{{$item->id}}" {{$item->id == $transaksi->id_produk ? 'selected': ''}}>{{ $item->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
