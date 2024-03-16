@extends('layout.manager.master')
@section('title', isset($student) ? 'Edit student' : 'Add student')

@section('moreCss')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 2171.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header m-md-3" >
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add student</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">student</li>
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
                            <form action="{{ isset($student) ? route('student.update', $student->studentId) : route('student.store') }}" method="POST">
                                @csrf
                                 @if( isset($student)) @method('PUT') @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name </label>
                                        <input type="text" name="studentName" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ isset($student) ? $student->studentName : old('fullName') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ isset($student) ? $student->email : old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone </label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" value="{{ isset($student) ? $student->phone : old('phone') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" style="display: {{ isset($student) ? 'none':''}}">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="display: {{ isset($student) ? 'none':"" }}" >
                                    </div>
                                    <div class="form-group" data-select2-id="29">
                                        <label>Class</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="classId" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            @foreach($classes as $class )
                                            <option  value="{{$class->classId}}" @selected(isset($student) && $student->classId == $class->classId) data-select2-id="3">{{$class->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" data-select2-id="29">
                                        <label>Parent</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="parentId" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            @foreach($parents as $parent )
                                                <option value="{{$parent->parentId}}" @selected(isset($student) && $student->parentId == $parent->parentId) data-select2-id="3">{{$parent->fullName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" @checked(isset($student) && $student->isActive ==1) value="1" type="radio" name="isActive">
                                            <label class="form-check-label">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="0" @checked(isset($student) && $student->isActive == 0)  type="radio"  name="isActive">
                                            <label class="form-check-label">Not Active</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ isset($student) ? 'Update' : 'Submit' }}</button>
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
