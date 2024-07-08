@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> produk
</h4>

<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>Produk</h5>
        </div>
        <div class="float-end ">
            <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary">Add</a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama produk</th>
                        <th>Harga</th>
                        <th>Nama Kategori</th>
                        <th>Nama Supplier</th>

                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i = 1; @endphp
                    @foreach ($produk as $data)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $data->nama_produk }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{$data->kategori->nama_kategori}}</td>
                        <td>{{$data->supplier->nama}}</td>



                        <td>
                            <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('produk.edit', $data->id) }}"
                                    class="btn btn-sm btn-warning">Edit</a> |
                                <button type="submit" onclick="return confirm('Are You Sure ?');"
                                    class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush
