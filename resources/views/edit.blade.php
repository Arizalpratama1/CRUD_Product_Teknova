@extends('layout.app ')


@section('content')
    @include('layout.sidebar')

<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <form action="/api/products/{{$product->id}}" method="POST">
    <div class="col-md-6">
    <div class="card">
            <div class="card-body">
                @csrf
                @method('PUT')
                <label>Product Code</label>
                <input type="Text" class="form-control" name="code" value="{{ $product->code }}" >
                <label>Product Name</label>
                <input type="Text" class="form-control" name="name" value="{{ $product->name}}" >
                <label>Description</label>
                <input type="Text" class="form-control" name="description" value="{{ $product->description}}" >
                <label>Price</label>
                <input type="Text" class="form-control" name="price" value="{{ $product->price}}" >
            </div>
        </div> 
    </div>

    <div class="col-md-12">
        <div class="card">
                <div class="card">
                    <div class="card-body">
                        <button class="btn side sides" type="submit">Simpan</button>
                        <a href="/api/products" class="btn btn-danger">Batal</a>
                    </div>
                </div>
        </div>
    </div>
    </form>
</div>
</secton>
@endsection