@extends('main')

@section('content')
<div class="container-fluid">
       
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Barang</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">
           
        </div>
        <div class="card-body">
            <form action="{{ route('building.update', $get->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nama</label>
                        <input type="text" name="name" value="{{ $get->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                            <label for="">Ukuran</label>
                            <input type="text" name="size" value="{{ $get->size }}" class="form-control {{ $errors->has('size') ? 'is-invalid' : ''}}" required>
                            {!! $errors->first('size', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    <div class="col-md-3">
                        <label for="">Harga</label>
                        <input type="text" name="price" value="{{ $get->price }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('price', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="col-md-3">
                        <label for="">Stok</label>
                        <input type="text" name="quantity" value="{{ $get->quantity }}" class="form-control {{ $errors->has('quantity') ? 'is-invalid' : ''}}" required>
                        {!! $errors->first('quantity', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <a href="{{ route('building.index') }}" class="btn btn-warning btn-sm">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection