<?php
Route::get('/', function () {
    return view('staff.dashboard');
})->name('staff.dashboard');
Route::controller(CourseController::class)->group(function () {
    Route::get('/Courses', 'index')->name('Staffcourse');
    Route::get('/Courses/Create', 'create')->name('Staffcourse.create');
    Route::post('/Courses', 'store')->name('Staffcourse.store');
    Route::get('/Courses/{id}/edit', 'edit')->name('Staffcourse.edit');
    Route::put('/Courses/{id}', 'update')->name('Staffcourse.update');
    Route::delete('/Courses/{id}', 'destroy')->name('Staffcourse.destroy');
});
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
