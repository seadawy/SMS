<?php

use App\Http\Controllers\Admin\Managercontroller;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('staff.dashboard');
})->name('dashboard');

Route::get('/courses', function ($id) {

});

Route::controller(Managercontroller::class)->group(function () {
    Route::get('/manager/dashboard','dashboard')->name('manager.dashboard');
    Route::get('/manager', 'index')->name('manager');
    Route::get('/manager/create', 'create')->name('manager.create');
    Route::post('/manager', 'store')->name('manager.store');
    //Route::get('/manager/{id}', 'show')->name('manager.show');
    Route::get('/manager/{id}/edit', 'edit')->name('manager.edit');
    Route::put('/manager/{id}', 'update')->name('manager.update');
    Route::delete('/manager/{id}', 'destroy')->name('manager.destroy');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/Courses', 'index')->name('course');
    Route::post('/orders', 'store');
});
