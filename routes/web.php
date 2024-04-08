<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\Managercontroller;
use App\Http\Controllers\Admin\Parentcontroller;
use App\Http\Controllers\Admin\Studentcontroller;
use App\Http\Controllers\Admin\Teachercontroller;
use App\Http\Controllers\authController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SupLessonController;
use App\Http\Middleware\adminAuth;
use App\Http\Middleware\teacherAuth;
use Illuminate\Support\Facades\Route;

Route::get('/courses', function ($id) {});

//url superAdmin
Route::prefix('admin')
    ->middleware('auth:staff')
    ->group(function () {
        Route::get('/', function () {
            return view('staff.manager.dashboard');
        })->name('admin.dashboard');
        // url manager
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
        // url student
        Route::controller(Studentcontroller::class)->group(function () {
            Route::get('/student', 'index')->name('student');
            Route::get('/student/create', 'create')->name('student.create');
            Route::post('/student', 'store')->name('student.store');
            Route::get('/student/{id}/edit', 'edit')->name('student.edit');
            Route::put('/student/{id}', 'update')->name('student.update');
            Route::delete('/student/{id}', 'destroy')->name('student.destroy');
        });
        // url classes
        Route::controller(ClassesController::class)->group(function () {
            Route::get('/classes', 'index')->name('classes');
            Route::get('/classes/create', 'create')->name('classes.create');
            Route::post('/classes', 'store')->name('classes.store');
            Route::get('/classes/{id}/edit', 'edit')->name('classes.edit');
            Route::put('/classes/{id}', 'update')->name('classes.update');
            Route::delete('/classes/{id}', 'destroy')->name('classes.destroy');
        });
        // url category
        Route::controller(CategoriesController::class)->group(function () {
            Route::get('/category', 'index')->name('category');
            Route::get('/category/create', 'create')->name('category.create');
            Route::post('/category', 'store')->name('category.store');
            Route::get('/category/{id}/edit', 'edit')->name('category.edit');
            Route::put('/category/{id}', 'update')->name('category.update');
            Route::delete('/category/{id}', 'destroy')->name('category.destroy');
        });
    });
Route::prefix('staff')
    ->middleware('auth:staff')
    ->group(function () {
        Route::get('/', function () {
            return view('staff.dashboard');
        })->name('staff.dashboard');
        // url course teacher
        Route::controller(CourseController::class)->group(function () {
            Route::get('/Courses', 'index')->name('Staffcourse');
            Route::get('/Courses/Create', 'create')->name('Staffcourse.create');
            Route::post('/Courses', 'store')->name('Staffcourse.store');
            Route::get('/Courses/{id}/edit', 'edit')->name('Staffcourse.edit');
            Route::put('/Courses/{id}', 'update')->name('Staffcourse.update');
            Route::delete('/Courses/{id}', 'destroy')->name('Staffcourse.destroy');
        });
        // url lesson teacher
        Route::controller(LessonController::class)->group(function () {
            Route::get('/Course/Lesson/', 'indexAll')->name('StaffLesson');
            Route::get('/Course/{id}/Lesson/', 'index')->name('StaffLesson.course');
            Route::get('/Lesson/Create', 'create')->name('StaffLesson.create');
            Route::post('/Lesson', 'store')->name('StaffLesson.store');
            Route::get('/Lesson/{id}/edit', 'edit')->name('StaffLesson.edit');
            Route::put('/Lesson/{id}', 'update')->name('StaffLesson.update');
            Route::delete('/Lesson/{id}', 'destroy')->name('StaffLesson.destroy');
        });

        Route::controller(SupLessonController::class)->group(function () {
            Route::get('/Lesson/{id}/GetSupLesson', 'index')->name('GetSupLesson');
        });
    });
Route::controller(authController::class)->group(function () {
    Route::post('/Login', 'authincate')->name('loginAuth');
    Route::post('/Logout', 'logout')->name('logout');
    Route::get('/forgetpassword', 'forgetpassword')->name('forgetpassword');
    Route::post('/forgetpass', 'forgetpass')->name('forgetpass');
    Route::get('/resetpassword/{id}', 'resetpassword')->name('resetpassword');
    Route::post('/resetpass/{id}', 'resetpass')->name('resetpass');
});
Route::get('/', [authController::class, 'index'])->name('login');
