@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Profile Detail</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <label class="form-control">{{ $user->name }}</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email</label>
                    <label class="form-control">{{ $user->email }}</label>
                  </div>
                </div>
              </div>
              <a class="btn btn-default pull-right" href="{{ route('index') }}">Back</a>
              <a class="btn btn-danger pull-left" href="{{ route('editUser', Auth::id()) }}">Edit</a>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
