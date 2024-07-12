@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>produk</h5>
                    </div>
                    <div class="float-end ">
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Nama produk</label>
                            <input type="text" class="form-control @error('produk') is-invalid @enderror" name="nama_produk"
                            value="{{ old('produk') }}" placeholder="Nama produk" required>
                            @error('produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" @error('harga') is-invalid @enderror name="harga"
                            value="{{ old('harga') }}" placeholder="harga" required>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Stok</label>
                            <input type="text" class="form-control" @error('stok') is-invalid @enderror name="stok"
                            value="{{ old('stok') }}" placeholder="stok" required>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="">kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                @foreach ($kategori as $data)
                                    <option value="{{$data->id}}">{{ $data->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">supplier</label>
                            <select name="id_supplier" id="" class="form-control">
                                @foreach ($supplier as $data)
                                    <option value="{{$data->id}}">{{ $data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover">
                        </div>



                    <br>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
