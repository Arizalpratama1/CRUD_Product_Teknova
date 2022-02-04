@extends('layout.app ')


@section('content')
    @include('layout.sidebar')

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @csrf
                <label>Product Code</label>
                <input type="Text" class="form-control" readonly value="{{ $product->code }}" >
                <label>Product Name</label>
                <input type="Text" class="form-control" readonly value="{{ $product->name}}" >
                <label>Description</label>
                <input type="Text" class="form-control" readonly value="{{ $product->description}}" >
                <label>Price</label>
                <input type="Text" class="form-control" readonly value="{{ $product->price}}" >
            </div>
        </div> 
    </div>

    <div class="col-md-12">
        <div class="card">
            <form action="/api/products/{{ $product->id }}" method="POST">
                <div class="card-body">
                    <a href="/api/products/{{$product->id}}/edit" class="btn btn-outline-warning" type="submit">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin Akan Menghapus?')" class="btn btn-outline-danger" type="submit">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
</secton>
@endsection