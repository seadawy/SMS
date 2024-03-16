<?php

use App\Http\Controllers\Admin\Classescontroller;
use App\Http\Controllers\Admin\Managercontroller;
use App\Http\Controllers\Admin\Parentcontroller;
use App\Http\Controllers\Admin\Studentcontroller;
use App\Http\Controllers\Admin\Teachercontroller;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staff.dashboard');
})->name('dashboard');

Route::get('/courses', function ($id) {

});
//url Manager
Route::controller(Managercontroller::class)->group(function () {
    Route::get('/manager/dashboard', 'dashboard')->name('manager.dashboard');
    Route::get('/manager', 'index')->name('manager');
    Route::get('/manager/create', 'create')->name('manager.create');
    Route::post('/manager', 'store')->name('manager.store');
    Route::get('/manager/{id}/edit', 'edit')->name('manager.edit');
    Route::put('/manager/{id}', 'update')->name('manager.update');
    Route::delete('/manager/{id}', 'destroy')->name('manager.destroy');
});
// url teacher
Route::controller(Teachercontroller::class)->group(function () {
    Route::get('/teacher', 'index')->name('teacher');
    Route::get('/teacher/create', 'create')->name('teacher.create');
    Route::post('/teacher', 'store')->name('teacher.store');
    Route::get('/teacher/{id}/edit', 'edit')->name('teacher.edit');
    Route::put('/teacher/{id}', 'update')->name('teacher.update');
    Route::delete('/teacher/{id}', 'destroy')->name('teacher.destroy');
});
// url parent
Route::controller(Parentcontroller::class)->group(function () {
    Route::get('/parent', 'index')->name('parent');
    Route::get('/parent/create', 'create')->name('parent.create');
    Route::post('/parent', 'store')->name('parent.store');
    Route::get('/parent/{id}/edit', 'edit')->name('parent.edit');
    Route::put('/parent/{id}', 'update')->name('parent.update');
    Route::delete('/parent/{id}', 'destroy')->name('parent.destroy');
});
// url classes
Route::controller(Classescontroller::class)->group(function () {
    Route::get('/classes', 'index')->name('classes');
    Route::get('/classes/create', 'create')->name('classes.create');
    Route::post('/classes', 'store')->name('classes.store');
    Route::get('/classes/{id}/edit', 'edit')->name('classes.edit');
    Route::put('/classes/{id}', 'update')->name('classes.update');
    Route::delete('/classes/{id}', 'destroy')->name('classes.destroy');
});
// url student
Route::controller(Studentcontroller::class)->group(function () {
    Route::get('/student', 'index')->name('student');
    Route::get('/student/create', 'create')->name('student.create');
    Route::post('/student', 'store')->name('student.store');
    Route::get('/student/{id}/edit', 'edit')->name('student.edit');
    Route::put('/student/{id}', 'update')->name('student.update');
    Route::delete('/student/{id}', 'destroy')->name('student.destroy');
});


Route::controller(CourseController::class)->group(function () {
    Route::get('Staff/Courses', 'index')->name('Staffcourse');

    Route::get('Staff/Courses/Create', 'create')->name('Staffcourse.create');
    Route::post('/Staff/Courses', 'store')->name('Staffcourse.store');

    Route::get('Staff/Courses/{id}/edit', 'edit')->name('Staffcourse.edit');
    Route::get('Staff/courses/{id}/', 'show')->name('Staffcourse.show');
});
