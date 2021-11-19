@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Product Detail</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <embed class="center" src="{{ asset('img/' . $product->foto) }}" style="width:400px;" frameborder="0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Name</label>
                    <label class="form-control">{{ $product->product_name }}</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Category</label>
                    <label class="form-control">{{ $product->category->category_name }}</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Description</label>
                    <textarea class="form-control" cols="8" rows="5" disabled>{{ $product->product_description }}</textarea>
                  </div>
                </div>
              </div>
              <a class="btn btn-default pull-right" href="{{ route('product.index') }}">Back</a>
              <a class="btn btn-danger pull-left" href="{{ route('product.edit', $product->id) }}">Edit</a>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
