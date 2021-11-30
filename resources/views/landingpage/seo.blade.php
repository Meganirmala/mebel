@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Search Engine Optimization</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('seo_store') }}" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Description</label>
                     <textarea class="form-control" name="description" id="description">{{ $seo ? $seo->description:'' }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Keywords/Kata Kunci</label>
                     <textarea class="form-control" name="keywords" id="keywords">{{ $seo ? $seo->keywords: '' }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Author</label>
                     <textarea class="form-control" name="author" id="author">{{ $seo ? $seo->author: '' }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="bmd-label-floating">Robots Index</label>
                    <div class="form-group">
                        <div class="form-check form-check-radio">
                          <div class="ml-3">
                            <label class="form-check-label row mb-2">
                                <input  class="form-check-input" type="radio" name="robot_index" id="exampleRadios1" value="1" {{ $seo ? ($seo->robot_index==1 ? 'checked':'') :'checked' }}>
                                Index
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                            <label class="form-check-label row">
                              <input  class="form-check-input" type="radio" name="robot_index" id="exampleRadios2" value="0" {{ $seo ? $seo->robot_index==0 ? 'checked':'':'' }}>
                              No Index
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="bmd-label-floating">Robots Follow</label>
                    <div class="form-group">
                        <div class="form-check form-check-radio">
                          <div class="ml-3">
                            <label class="form-check-label row mb-2">
                              <input  class="form-check-input" type="radio" name="robot_follow" id="robot_follow1" value="1" {{ $seo ? $seo->robot_follow==1 ? 'checked':'':'checked' }}>
                              Follow
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                            <label class="form-check-label row">
                              <input  class="form-check-input" type="radio" name="robot_follow" id="robot_follow2" value="0" {{ $seo ? $seo->robot_follow==0 ? 'checked':'':'' }}>
                              No Follow
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Save</button>
              <a class="btn btn-danger pull-left" href="{{ route('category.index') }}">Back</a>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
