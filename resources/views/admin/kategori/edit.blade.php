@extends('layouts.admin')

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables / kategori</span> / Edit</h4>
    <div class="card mb-4 " style="border-radius: 30px; max-width: 80%; ">
        <div class="card-body pt-2 mt-1" >
            <form id="formAccountSettings" method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                @csrf
                @method('PUT') <!-- Hidden method field for PUT request -->

                <div class="row mt-2 gy-4">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input id="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                                   value="{{ old('nama_kategori', $kategori->name) }}" required autocomplete="nama_kategori" autofocus placeholder="Enter your Nama_kategori kategori">
                            <label for="nama_kategori">Nama_kategori kategori</label>
                            @error('nama_kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>





   </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary me-2 waves-effect waves-light" style="border-radius: 30px">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect" style="border-radius: 30px">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
