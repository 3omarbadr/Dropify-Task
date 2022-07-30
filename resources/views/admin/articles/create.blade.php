@extends('admin.layouts.master')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Articles</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/article">Home</a></li>
            @include('admin.layouts.inc.messages')
            <li class="breadcrumb-item active">Articles</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <form method="POST" action="{{url("article/store")}}" id="add-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-sm-6 offset-3">
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter ...">
                  @error('title') <p class="text-danger">{{$message}}</p> @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 offset-3">
                <!-- textarea -->
                <div class="form-group">
                  <label>Body</label>
                  <textarea class="form-control" name="body" rows="3" placeholder="Enter ...">{{old('body')}}</textarea>
                  @error('body') <p class="text-danger">{{$message}}</p> @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 offset-3">
                <div class="form-group">
                  <label>Thumbnail</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="thumbnail" value="{{old('thumbnail')}}">
                    @error('thumbnail') <p class="text-danger">{{$message}}</p> @enderror
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 offset-3">
                <button type="submit" form="add-form" class="btn btn-primary align-content-center">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection