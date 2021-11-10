@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Category</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category Name</label>
                    <input type="text" name="category_name" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category Description</label>
                   <textarea class="form-control" rows="3" name="category_description" id="category_description"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Add</button>
              <a class="btn btn-danger pull-left" href="{{ route('category.index') }}">Cancel</a>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
