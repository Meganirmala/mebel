@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Product</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Name</label>
                    <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Category</label>
                    <select name="category_id" id="" class="form-control">
                      <option value="">Select Category</option>
                      @foreach ($category as $obj)
                      <option {{$product->category_id == $obj->id ? 'selected':''}} value="{{$obj->id}}">{{ $obj->category_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Description</label>
                   <textarea class="form-control" rows="3" name="product_description" id="product_description">{{ $product->product_description }}</textarea>
                  </div>
                </div>
                <div class="col-md-12">
                    <label class="bmd-label-floating">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
              </div>
              <button type="submit" class="btn btn-success pull-right">Update</button>
              <a class="btn btn-danger pull-left" href="{{ route('product.index') }}">Cancel</a>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
