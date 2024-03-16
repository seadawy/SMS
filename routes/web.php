<?php

use App\Http\Controllers\Admin\Managercontroller;
use App\Http\Controllers\Admin\Teachercontroller;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staff.dashboard');
})->name('dashboard');

Route::get('/courses', function ($id) {

});

Route::controller(Managercontroller::class)->group(function () {
    Route::get('/manager/dashboard', 'dashboard')->name('manager.dashboard');
    Route::get('/manager', 'index')->name('manager');
    Route::get('/manager/create', 'create')->name('manager.create');
    Route::post('/manager', 'store')->name('manager.store');
    Route::get('/manager/{id}/edit', 'edit')->name('manager.edit');
    Route::put('/manager/{id}', 'update')->name('manager.update');
    Route::delete('/manager/{id}', 'destroy')->name('manager.destroy');
});
Route::resource("teacher", Teachercontroller::class);

Route::controller(CourseController::class)->group(function () {
    Route::get('Staff/Courses', 'index')->name('Staffcourse');

    Route::get('Staff/Courses/Create', 'create')->name('Staffcourse.create');
    Route::post('/Staff/Courses', 'store')->name('Staffcourse.store');

    Route::get('Staff/Courses/{id}/edit', 'edit')->name('Staffcourse.edit');
    //Route::get('Staff/courses/{id}/', 'show')->name('Staffcourse.show');
    Route::delete('Staff/Courses/{id}', 'destroy')->name('Staffcourse.destroy');
});
