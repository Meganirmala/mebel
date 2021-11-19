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
                            <a class="btn btn-sm btn-success" href="{{ route('product.create') }}">Add Product</a>
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
                        <td style="text-align: center" width="210px">
                          <form action="{{ route('product.destroy',$data->id) }}" method="POST">
                                <a class="btn btn-sm btn-info" title="details product" href="{{ route('product.show', $data->id) }}">
                                  <i class="material-icons">info</i>
                                </a>
                                <a class="btn btn-sm btn-warning" title="edit product" href="{{ route('product.edit', $data->id) }}">
                                  <i class="material-icons">edit</i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="delete product" class="btn btn-sm btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                                  <i class="material-icons">delete</i>
                                </button>
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
