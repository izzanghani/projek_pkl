@extends('layouts.admin')
@section('content')
    <div class="container">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start" style="margin-bottom: 1%;">
                            <h4 class="card-title">Nama Produk</h4>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    @foreach ($produk as $data)
                        <div class="card">
                            <img class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_produk }}</h5>
                                <td>
                                    <img src="{{ asset('/images/produk/' . $data->cover) }}" width="100">
                                </td>
                                {{-- <p class="card-text">{{$data->nama_produk}}</p> --}}
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
