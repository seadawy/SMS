<?php
Route::get('/', function () {
    return view('staff.manager.dashboard');
})->name('admin.dashboard');
Route::controller(Managercontroller::class)->group(function () {
    Route::get('/manager/dashboard', 'dashboard')->name('manager.dashboard');
    Route::get('/manager', 'index')->name('manager');
    Route::get('/manager/create', 'create')->name('manager.create');
    Route::post('/manager', 'store')->name('manager.store');
    Route::get('/manager/{id}/edit', 'edit')->name('manager.edit');
    Route::put('/manager/{id}', 'update')->name('manager.update');
    Route::delete('/manager/{id}', 'destroy')->name('manager.destroy');
});
Route::controller(Teachercontroller::class)->group(function () {
    Route::get('/teacher', 'index')->name('teacher');
    Route::get('/teacher/create', 'create')->name('teacher.create');
    Route::post('/teacher', 'store')->name('teacher.store');
    Route::get('/teacher/{id}/edit', 'edit')->name('teacher.edit');
    Route::put('/teacher/{id}', 'update')->name('teacher.update');
    Route::delete('/teacher/{id}', 'destroy')->name('teacher.destroy');
});
Route::controller(Parentcontroller::class)->group(function () {
    Route::get('/parent', 'index')->name('parent');
    Route::get('/parent/create', 'create')->name('parent.create');
    Route::post('/parent', 'store')->name('parent.store');
    Route::get('/parent/{id}/edit', 'edit')->name('parent.edit');
    Route::put('/parent/{id}', 'update')->name('parent.update');
    Route::delete('/parent/{id}', 'destroy')->name('parent.destroy');
});
Route::controller(Studentcontroller::class)->group(function () {
    Route::get('/student', 'index')->name('student');
    Route::get('/student/create', 'create')->name('student.create');
    Route::post('/student', 'store')->name('student.store');
    Route::get('/student/{id}/edit', 'edit')->name('student.edit');
    Route::put('/student/{id}', 'update')->name('student.update');
    Route::delete('/student/{id}', 'destroy')->name('student.destroy');
});
Route::controller(Classescontroller::class)->group(function () {
    Route::get('/classes', 'index')->name('classes');
    Route::get('/classes/create', 'create')->name('classes.create');
    Route::post('/classes', 'store')->name('classes.store');
    Route::get('/classes/{id}/edit', 'edit')->name('classes.edit');
    Route::put('/classes/{id}', 'update')->name('classes.update');
    Route::delete('/classes/{id}', 'destroy')->name('classes.destroy');
});
Route::controller(Categoriescontroller::class)->group(function () {
    Route::get('/category', 'index')->name('category');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category', 'store')->name('category.store');
    Route::get('/category/{id}/edit', 'edit')->name('category.edit');
    Route::put('/category/{id}', 'update')->name('category.update');
    Route::delete('/category/{id}', 'destroy')->name('category.destroy');
});
