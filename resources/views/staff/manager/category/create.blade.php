@extends('layout.manager.master')
@section('title', isset($category) ? 'Edit category' : 'Add category')

@section('moreCss')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 2171.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header m-md-3" >
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add category</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">category</li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ isset($category) ? route('category.update', $category->categoryId) : route('category.store') }}" method="POST">
                                @csrf
                                 @if( isset($category)) @method('PUT') @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title </label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{ isset($category) ? $category->title : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="display: {{ isset($category) ? '':'none'}}" >Created_at</label>
                                        <input type="text" name="created_at" style="display: {{ isset($category) ? '':'none'}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ isset($category) ? $category->created_at : '' }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Submit' }}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
