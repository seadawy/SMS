@extends('layout.master')
@section('title', isset($course) ? 'Edit Course' : 'Add Course')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Coures Management</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">
                                <a href="{{ route('Staffcourse') }}" class="text-muted">Courses</a>
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
            <div class="col-md-12">
                <div class="card card-primary">
                    <form
                        action="{{ isset($course) ? route('Staffcourse.update', $course->courseId) : route('Staffcourse.store') }}"
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
                                <input type="text" name="price" value="{{ isset($course) ? $course->price : '' }}"
                                    class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Select Category</label>
                                <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
                                    <option value="" selected>Choose...</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->categoryId }}"
                                            @if (isset($course)) @selected($category->categoryId == $course->category) @endif>
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Select Class Added To</label>
                                <select class="custom-select mr-sm-2" name="inClass" id="inlineFormCustomSelect">
                                    <option value="" selected>Choose...</option>
                                    @foreach ($classes as $clas)
                                        <option value="{{ $clas->classId }}"
                                            @if (isset($course)) @selected($clas->classId == $course->inClass) @endif>
                                            {{ $clas->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="createdBy" value="1">
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary btn btn-lg btn-primary">
                                {{ isset($course) ? 'Update' : 'Add New' }} Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
