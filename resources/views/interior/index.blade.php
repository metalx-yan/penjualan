@extends('main')

@section('content')
<div class="container-fluid">
       
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Interior</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">
           
        </div>
        @php
            $no = 1;
        @endphp
        <div class="card-body">
            <a href="{{ route('interior.create') }}" class="btn btn-primary btn-sm">Tambah Barang</a>
            <br>
            <br>
            <table class="table border" id="myTable">
                <thead>
                    <tr>                        
                        <th>No</th>
                        <th>Jenis Jasa</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
           
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td> 
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="{{ route('interior.edit', $item->id ) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <form action="{{ route('interior.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

@endsection