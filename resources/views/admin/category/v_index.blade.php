@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Data Category</h4>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                    <div class="col-lg-11">
                        <div class="pull-left">
                            <a class="btn btn-mini btn-success" href="{{ route('category.create') }}">Add Category</a>
                        </div>
                    </div>
                  <thead class=" text-primary">
                    <tr>
                      <th>No</th>
                      <th>Category Name</th>
                      <th>Category Description</th>
                      <th style="text-align: center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($category as $data)
                          <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $data->category_name }}</td>
                              <td>{{ $data->category_description }}</td>
                              <td style="text-align: center">
                                <form action="{{ route('category.destroy',$data->id) }}" method="POST">
                                      <a class="btn btn-mini btn-primary" href="{{ route('category.edit', $data->id) }}">Edit</a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-mini btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
              {!! $category->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
