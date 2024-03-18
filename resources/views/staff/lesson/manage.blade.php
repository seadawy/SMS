@extends('layout.master')
@section('title', 'Lessons Management')

@section('moreCss')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Lesson Management</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Lesson</li>
                            <li class="breadcrumb-item active" aria-current="page">Manage</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Sub-lessons</th>
                                        <th>Title</th>
                                        <th>At Course</th>
                                        <th>Created By</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lessons as $lesson)
                                        <tr>
                                            <td>
                                                <button class="btn btn-info">
                                                    show N Sub-lessons
                                                </button>
                                            </td>
                                            <td>{{ $lesson->lessonTitle }}</td>
                                            <td>{{ $lesson->AtCourse->title }}</td>
                                            <td>{{ $lesson->CreatedBy->name }}</td>
                                            <td>{{ $lesson->created_at->toDateString() }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="actions buttons">
                                                    <a href="{{ route('Staffcourse.edit', $lesson->courseId) }}"
                                                        class="btn btn-success font-weight-bold">
                                                        <i class=" fas fa-plus"></i>
                                                        sub-lesson
                                                    </a>
                                                    <a href="{{ route('Staffcourse.edit', $lesson->courseId) }}"
                                                        class="btn btn-warning text-primary">
                                                        <i class=" fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('Staffcourse.edit', $lesson->courseId) }}"
                                                        class="btn btn-warning text-primary">
                                                        <i class=" fas fa-edit"></i>
                                                    </a>

                                                    <form action="{{ route('Staffcourse.destroy', $lesson->courseId) }}"
                                                        method="POST" type="button" class="btn btn-danger p-0"
                                                        onsubmit="return confirm('Delete ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger m-0">
                                                            <i class=" fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="child-row">
                                            <td colspan="6">
                                                <table class="table table-sm mb-0 table-info">
                                                    <thead class="">
                                                        <th>Supplementary Lesson Title</th>
                                                        <th>Lesson Type</th>
                                                        <th>Created At</th>
                                                    </thead>
                                                    <tbody class="">
                                                        @foreach ($lesson->SupLessons as $sup)
                                                            <tr>
                                                                <td>{{ $sup->supTitle }}</td>
                                                                <td>{{ $sup->lessonType }}</td>
                                                                <td>{{ $sup->createdAt }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="bg-primary text-white">
                                    <tr>
                                        <th>Sub Lessons</th>
                                        <th>Title</th>
                                        <th>At Course</th>
                                        <th>Created By</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('moreJs')
    <script src="{{ asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({

            });
        });
    </script>
@endsection
