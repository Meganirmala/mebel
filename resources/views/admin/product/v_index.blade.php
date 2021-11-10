@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Data Product</h4>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                    <div class="col-lg-11">
                        <div class="pull-left">
                            <a class="btn btn-mini btn-success" href="{{ route('product.create') }}">Add Product</a>
                        </div>
                    </div>
                  <thead class=" text-primary">
                    <tr>
                      <th>No</th>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Product Category</th>
                      <th>Price</th>
                      <th style="text-align: center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product as $data)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>
                            <img src="{{ asset('img/'. $data->foto) }}" alt="" class="product-image">
                        </td>
                        <td>{{ $data->product_name }}</td>
                        <td>{{ $data->category->category_name }}</td>
                        <td>{{ $data->price }}</td>
                        <td style="text-align: center">
                          <form action="{{ route('product.destroy',$data->id) }}" method="POST">
                                <a class="btn btn-mini btn-primary" href="{{ route('product.edit', $data->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-mini btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                  </tbody>
              </table>
              {!! $product->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
