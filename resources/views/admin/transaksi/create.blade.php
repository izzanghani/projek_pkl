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
                    <div class="float-end ">
                        <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Supplier</label>
                            <select name="id_supplier" id="" class="form-control">
                                @foreach ($supplier as $data)
                                    <option value="{{$data->id}}">{{ $data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                @foreach ($kategori as $data)
                                    <option value="{{$data->id}}">{{ $data->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Produk</label>
                            <select name="id_produk" id="" class="form-control">
                                @foreach ($produk as $data)
                                    <option value="{{$data->id}}">{{ $data->nama_produk}}</option>
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
