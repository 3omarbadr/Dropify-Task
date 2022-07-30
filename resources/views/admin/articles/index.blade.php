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
                    <div class="card">
                        @include('admin.layouts.inc.success_message')
                        <div class="card-header">
                            <h3 class="card-title">Articles</h3>

                            <div class="card-tools">
                                <a href="{{url('/article/create')}}" class="btn btn-small btn-primary">Add New</a>
                            </div>
                        </div>
                        @if ($articles->isEmpty())
                        <strong class="text-center">There is no provided data</strong> 
                        @else
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Thumbnail</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($articles as $article)
                                <tbody id="articles-table">
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->body}}</td>
                                        <td>
                                            @if (!$article->thumbnail)
                                            No Thumbnail
                                            @else
                                            <img src="{{asset('storage/' . $article->thumbnail)}}" class="rounded"
                                                height="60" width="60">
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">

                                                <a href="{{url("article/edit/$article->id")}}" class="btn btn-sm
                                                    btn-primary ml-2"><i class="fas fa-edit"></i></a>

                                                <form method="POST"
                                                    action="{{ route('articles.destroy', $article->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn
                                                                    btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">

                {{$articles->links()}}

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection