@extends('layout.master')
@section('title', 'Courses Management')

@section('moreCss')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}" rel="stylesheet">
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
                                <a href="{{ route('staff.dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Courses</li>
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
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Class</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->categoryF->title }}</td>
                                            <td>{{ $course->price }}</td>
                                            <td>{{ $course->class->title }}</td>
                                            <td>{{ $course->teacher->name }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">

                                                    <a href="{{ route('Staffcourse.edit', $course->courseId) }}"
                                                        class="btn btn-info">
                                                        <i class=" fas fa-edit"></i>
                                                    </a>

                                                    <a href="{{ route('StaffLesson.course', $course->courseId) }}"
                                                        class="btn btn-rounded btn-outline-info">
                                                        <i class=" fas fa-eye"></i>
                                                    </a>
                                                    <form method="POST" role="button" onsubmit="return confirm('')"
                                                        action="{{ route('Staffcourse.destroy', $course->courseId) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Class</th>
                                        <th>Created By</th>
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
    <script src="{{ asset('assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endsection
