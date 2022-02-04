@extends('layout.app ')

@section('content')
    @include('layout.sidebar')
    
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>List Product</h1>
              </div>
              <div class="col-sm-6">
              <a href="/api/products/create" type="button" class="btn float-right side sides">
                  <i class="fa fa-plus mr-1"></i>
                  Create Product
              </a>
              </div>
            </div>
          </div>

          <!--  -->

          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Code Product</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $product as $pro )
                  <tr>
                      <td>{{ $pro->code }}</td>
                      <td>{{ $pro->name }}</td>
                      <td>{{ $pro->description }}</td>
                      <td>{{ $pro->price }}</td>
                      <td>
                          <a href="/api/products/{{ $pro->id }}" class="badge badge-light-secondary">
                            <i data-feather="eye"></i>
                            Lihat</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          
    </section>

@endsection