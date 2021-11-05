@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Update Category</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category Name</label>
                    <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category Description</label>
                   <textarea class="form-control" rows="5" name="category_description" id="category_description">{{ $category->category_description }}
                   </textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Update</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
