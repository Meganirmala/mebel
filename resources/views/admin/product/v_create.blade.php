@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Product</h4>
          </div>
          <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Name</label>
                    <input type="text" name="product_name" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Category</label>
                    <select name="" id="" class="form-control">
                      <option value="">Select Category</option>
                      <option value="">tes</option>
                      <option value="">tes</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Product Description</label>
                   <textarea class="form-control" rows="5" name="product_description" id="product_description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Price</label>
                    <input type="number" name="price" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Add</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
