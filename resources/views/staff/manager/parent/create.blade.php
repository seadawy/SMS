@extends('layout.manager.master')
@section('title', isset($parent) ? 'Edit Parent' : 'Add Parent')

@section('moreCss')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 2171.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header m-md-3" >
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Parent</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Parent</li>
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
                            <form action="{{ isset($parent) ? route('parent.update', $parent->parentId) : route('parent.store') }}" method="POST">
                                @csrf
                                 @if( isset($parent)) @method('PUT') @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name </label>
                                        <input type="text" name="fullName" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ isset($parent) ? $parent->fullName : old('fullName') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ isset($parent) ? $parent->email : old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone </label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" value="{{ isset($parent) ? $parent->phone : old('phone') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address </label>
                                        <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ isset($parent) ? $parent->address : old('address') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" style="display: {{ isset($parent) ? 'none':''}}">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="display: {{ isset($parent) ? 'none':"" }}" >
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" @checked(isset($parent) && $parent->isActive ==1) value="1" type="radio" name="isActive">
                                            <label class="form-check-label">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="0" @checked(isset($parent) && $parent->isActive == 0)  type="radio"  name="isActive">
                                            <label class="form-check-label">Not Active</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ isset($parent) ? 'Update' : 'Submit' }}</button>
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
