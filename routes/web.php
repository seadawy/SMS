<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staff.dashboard');
})->name('dashboard');

Route::get('/courses', function ($id) {

});

Route::controller(CourseController::class)->group(function () {
    Route::get('/Courses', 'index')->name('course');
    Route::post('/orders', 'store');
});
