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

    <div class="container-fluid">
        @if ($errors->any())
            <div class="bg-danger text-white py-1">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
                                <label for="exampleInputtitle1">Title </label>
                                <input type="text" name="title" value="{{ isset($course) ? $course->title : '' }}"
                                    class="form-control" id="exampleInputtitle1" placeholder="Enter course title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice1">Price</label>
                                <input type="text" name="price" value="{{ isset($course) ? $course->title : '' }}"
                                    class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Select Category</label>
                                <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
                                    <option selected="">Choose...</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->categoryId }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Class Added To</label>
                                <select class="custom-select mr-sm-2" name="inClass" id="inlineFormCustomSelect">
                                    <option selected="">Choose...</option>
                                    @foreach ($classes as $clas)
                                        <option value="{{ $clas->classId }}">{{ $clas->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="createdBy" value="1">
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary ">
                                {{ isset($course) ? 'edit' : 'create' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
