<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\authController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SupLessonController;
use App\Http\Middleware\adminAuth;
use App\Http\Middleware\teacherAuth;
use Illuminate\Support\Facades\Route;

Route::get('/courses', function ($id) {});

//SuperAdmin
Route::prefix('admin')->middleware(adminAuth::class)->group(function () {
    require __DIR__ . '/admin.php';
});

//Teacher
Route::prefix('teacher')->middleware(teacherAuth::class)->group(function () {
    require __DIR__ . '/teacher.php';
});

//Authintcation
Route::controller(authController::class)->group(function () {
    Route::post('/Login', 'authincate')->name('loginAuth');
    Route::post('/Logout', 'logout')->name('logout');
});
Route::get('/', [authController::class, 'index'])->name('login');
