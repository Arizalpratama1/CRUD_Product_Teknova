@extends('layout.app ')


@section('content')
    @include('layout.sidebar')
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <form action="/api/products" method="POST">
    <div class="col-md-6">
    <div class="card">
            <div class="card-body">
                @csrf
                <label>Product Code</label>
                <input type="hidden" name="id_product">
                <input type="Text" class="form-control" name="code" placeholder="Ex. ('Pro/1001')">
                <label>Product Name</label>
                <input type="Text" class="form-control" name="name" placeholder="Ex. ('Mouse')">
                <label>Description</label>
                <input type="Text" class="form-control" name="description" placeholder="Ex. ('Mouse is .....')">
                <label>Price</label>
                <input type="Text" class="form-control" name="price" placeholder="Ex. ('20000')">
            </div>
        </div> 
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button class="btn side sides" type="submit">Simpan</button>
                <a href="/api/products" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </div>
    </form>
</div>
</secton>
@endsection