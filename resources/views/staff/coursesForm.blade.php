@extends('layout.master')
@section('title', isset($course) ? 'Edit Course' : 'Add Course')

@section('moreCss')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Coures Management</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">
                                <a href="{{ route('Staffcourse') }}" class="text-muted">courses</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ isset($course) ? 'Edit Course' : 'Add Course' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

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
                        <form
                            action="{{ isset($course) ? route('Staffcourse.update', $course->id) : route('Staffcourse.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($course))
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name </label>
                                    <input type="text" name="name" value="{{ isset($course) ? $course->title : '' }}"
                                        class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" value="{{ isset($course) ? $course->title : '' }}"
                                        class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">created at</label>
                                    <input name="created_at" value="{{ isset($course) ? $course->title : '' }}"
                                        class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit"
                                    class="btn btn-primary">{{ isset($course) ? 'edit' : 'create' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
