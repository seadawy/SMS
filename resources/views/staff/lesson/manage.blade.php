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
                                <a href="{{ route('staff.dashboard') }}" class="text-muted">Dashboard</a>
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
                            <table id="zero_config" class="table table-bordered no-wrap">
                                <thead>
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
                                                <button class="btn btn-info"
                                                    onclick="getSupLessons({{ $lesson->lessonId }})">
                                                    show N Sub-lessons
                                                </button>
                                            </td>
                                            <td>{{ $lesson->lessonTitle }}</td>
                                            <td>{{ $lesson->AtCourse->title }}</td>
                                            <td>{{ $lesson->CreatedBy->name }}</td>
                                            <td>{{ $lesson->created_at->toDateString() }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="actions buttons">
                                                    <a href="{{ route('Staffcourse.edit', $lesson->lessonId) }}"
                                                        class="btn btn-success font-weight-bold">
                                                        <i class=" fas fa-plus"></i>
                                                        sub-lesson
                                                    </a>

                                                    <a href="{{ route('StaffLesson.edit', $lesson->lessonId) }}"
                                                        class="btn btn-outline-info text-prime">
                                                        <i class=" fas fa-edit"></i>
                                                    </a>

                                                    <form action="{{ route('StaffLesson.destroy', $lesson->lessonId) }}"
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
                                    @endforeach
                                </tbody>
                                <tfoot>
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
        function getSupLessons(lessonId) {
            $.ajax({
                url: "{{ route('GetSupLesson', ['id' => ':id']) }}".replace(':id', lessonId),
                method: "GET",
                type: 'JSON',
                success: function(res) {
                    var parsedArray = JSON.parse(res);
                    var subLessonsRow = document.getElementById('sub-lessons-' + lessonId);
                    if (!subLessonsRow) {
                        var parentRow = document.querySelector('[onclick="getSupLessons(' + lessonId + ')"]')
                            .parentNode.parentNode;
                        var newTr = document.createElement('tr');
                        newTr.id = 'sub-lessons-' + lessonId;
                        newTr.className = 'child-row';
                        var cnt = 0;
                        var content =
                            `<td colspan="6"><table class="table table-sm mb-0 table-hover"><thead class="bg-info text-white"><th>#</th><th>Lesson Title</th><th>Lesson Type</th><th>Created At</th><th>Actions</th></thead><tbody id="sub-table-lessons-${lessonId}">`;
                        parsedArray.forEach(element => {
                            content +=
                                `<tr><td>${++cnt}</td><td>${element.supTitle}</td><td>${element.lessonType}</td><td>${element.created_at}</td><td>
                                <a href="{{ route('Staffcourse.edit', $lesson->courseId) }}" class="btn btn-warning text-primary"><i class=" fas fa-edit"></i></a>
                                <form action="{{ route('Staffcourse.destroy', $lesson->courseId) }}" method="POST" type="button" class="btn btn-danger p-0"
                                    onsubmit="return confirm('Delete ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">
                                        <i class=" fas fa-trash"></i>
                                    </button>
                                </form>
                            </td></tr>`;
                        });
                        content += `</tbody></table></td>`;
                        newTr.innerHTML = content;
                        parentRow.insertAdjacentHTML('afterend', newTr.outerHTML);
                    } else {
                        if (subLessonsRow.style.display === 'none') {
                            subLessonsRow.style.display = 'table-row';
                        } else {
                            subLessonsRow.style.display = 'none';
                        }
                    }
                },
                error: function(eror) {
                    console.log(eror);
                }
            });
        }
        $(document).ready(function() {});
    </script>
@endsection
