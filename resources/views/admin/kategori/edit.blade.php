@extends('layouts.admin')

@section('content')
<div class="container mt-10">
    <div class="row page-titles mx-0">
        <div class="col-sm-12 p-md-0">
            <div class="welcome-text">
              <h4>Tables / Kategori / Edit</h4>
            </div>
        </div>
    </div>
</div>


<div class="container">
            <div class="card mb-4 ">
                <div class="card-body pt-2 mt-1" >
                    <form id="formAccountSettings" method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                        @csrf
                        @method('PUT') <!-- Hidden method field for PUT request -->

                        <div class="mb-2">
                            <label class="form-label">Nama kategori</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="nama_kategori"
                            value="{{ old('kategori') }}" placeholder="Nama kategori" required>
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="mt-4">
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-sm btn-danger">reset</button>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
