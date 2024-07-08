@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>supplier</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('supplier.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Nama Supplier</label>
                            <input type="text" class="form-control @error('supplier') is-invalid @enderror" name="nama"
                            value="{{ old('supplier') }}" placeholder="Nama Supplier" required>
                            @error('supplier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">No Telepon</label>
                            <input type="text" class="form-control" @error('no_telepon') is-invalid @enderror name="no_telepon"
                            value="{{ old('no_telepon') }}" placeholder="no telepon" required>
                            @error('no_telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" @error('alamat') is-invalid @enderror name="alamat"
                            value="{{ old('alamat') }}" placeholder="alamat" required>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
