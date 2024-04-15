@extends('layout.master')

@section('title', isset($lesson) ? 'Edit Lesson' : 'Add Lesson')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Coures Management</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('staff.dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">
                                <a href="{{ route('StaffLesson') }}" class="text-muted">Lessons</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ isset($lesson) ? 'Edit Lesson' : 'Add Lesson' }}</li>
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
                        action="{{ isset($lesson) ? route('StaffLesson.update', $lesson->lessonId) : route('StaffLesson.store') }}"
                        method="POST">
                        @csrf
                        @if (isset($lesson))
                            @method('PUT')
                        @endif
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="exampleInputtitle1">Title </label>
                                <input type="text" name="lessonTitle"
                                    value="{{ isset($lesson) ? $lesson->lessonTitle : '' }}" class="form-control"
                                    id="exampleInputtitle1" placeholder="Enter lesson title">
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Course Added To</label>
                                <select class="form-select mr-sm-2" name="courseId" id="inlineFormCustomSelect">
                                    <option value="" selected>Choose...</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->courseId }}"
                                            @if (isset($lesson)) @selected($course->courseId == $lesson->courseId) @endif>
                                            {{ $course->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="createdBy" value="1">
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-lg btn-primary">
                                {{ isset($lesson) ? 'Update' : 'Add New' }} lessson
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
