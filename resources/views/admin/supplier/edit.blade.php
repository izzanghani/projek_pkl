
@extends('layouts.admin')

@section('content')

    <div class="card mb-4 " style="border-radius: 30px; max-width: 80%; ">
        <div class="card-body pt-2 mt-1" >
            <form id="formAccountSettings" method="POST" action="{{ route('supplier.update', $supplier->id) }}">
                @csrf
                @method('PUT') <!-- Hidden method field for PUT request -->

                <div class="row mt-2 gy-4">
                    <div class="col-md-12">
                        <label for="nama">Nama Supplier</label>
                        <div class="form-floating form-floating-outline">
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                   value="{{ old('nama', $supplier->nama) }}" required autocomplete="nama" autofocus placeholder="Enter your name supplier">

                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="no_telepon">No Telepon</label>
                        <div class="form-floating form-floating-outline">
                            <input id="no_telepon" type="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                   value="{{ old('no_telepon', $supplier->no_telepon) }}" required autocomplete="no_telepon" placeholder="Enter your no telepon">

                            @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="alamat">Alamat</label>
                        <div class="form-floating form-floating-outline">
                            <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                   value="{{ old('alamat', $supplier->alamat) }}" required autocomplete="alamat" placeholder="Enter your alamat">

                            @error('alamat')
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
