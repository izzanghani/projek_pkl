
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">nama</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                                value="{{ $produk->nama_produk }}" placeholder="nama" required>
                            @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{ $produk->harga }}" placeholder="jumlah orang" required>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">stok</label>
                            <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ $produk->stok }}" placeholder="jumlah orang" required>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                @foreach ($kategori as $item)
                                    <option value="{{$item->id}}" {{$item->id == $produk->id_kategori ? 'selected': ''}}>{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">supplier</label>
                            <select name="id_supplier" id="" class="form-control">
                                @foreach ($supplier as $item)
                                    <option value="{{$item->id}}" {{$item->id == $produk->id_supplier ? 'selected': ''}}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                            <input type="file" class="form-control" name="cover">
                        </div>


                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
