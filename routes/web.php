<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\StudentClassHistoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/teachers', [TeacherController::class, 'index'])
        ->name('teachers.index');

    Route::get('/admin/teachers/create', [TeacherController::class, 'create'])
        ->name('teachers.create');

    Route::post('/admin/teachers', [TeacherController::class, 'store'])
        ->name('teachers.store');

    Route::get('/admin/teachers/{id}/edit', [TeacherController::class, 'edit'])
        ->name('teachers.edit');

    Route::put('/admin/teachers/{id}', [TeacherController::class, 'update'])
        ->name('teachers.update');

    Route::delete('/admin/teachers/{id}', [TeacherController::class, 'destroy'])
        ->name('teachers.destroy');

    Route::get('/admin/classes', [SchoolClassController::class, 'index'])
        ->name('classes.index');

    Route::get('/admin/classes/create', [SchoolClassController::class, 'create'])
        ->name('classes.create');

    Route::post('/admin/classes', [SchoolClassController::class, 'store'])
        ->name('classes.store');

    Route::get('/admin/classes/{id}/edit', [SchoolClassController::class, 'edit'])
        ->name('classes.edit');

    Route::put('/admin/classes/{id}', [SchoolClassController::class, 'update'])
        ->name('classes.update');

    Route::delete('/admin/classes/{id}', [SchoolClassController::class, 'destroy'])
        ->name('classes.destroy');
    Route::get('/admin/students', [StudentController::class, 'index'])
        ->name('students.index');

    Route::get('/admin/students/create', [StudentController::class, 'create'])
        ->name('students.create');

    Route::post('/admin/students', [StudentController::class, 'store'])
        ->name('students.store');

    Route::get('/admin/students/{id}/edit', [StudentController::class, 'edit'])
        ->name('students.edit');

    Route::put('/admin/students/{id}', [StudentController::class, 'update'])
        ->name('students.update');

    Route::delete('/admin/students/{id}', [StudentController::class, 'destroy'])
        ->name('students.destroy');

    Route::get('/admin/academic-years', [AcademicYearController::class, 'index'])
        ->name('academic-years.index');

    Route::get('/admin/academic-years/create', [AcademicYearController::class, 'create'])
        ->name('academic-years.create');

    Route::post('/admin/academic-years', [AcademicYearController::class, 'store'])
        ->name('academic-years.store');

    Route::get('/admin/academic-years/{id}/edit', [AcademicYearController::class, 'edit'])
        ->name('academic-years.edit');

    Route::put('/admin/academic-years/{id}', [AcademicYearController::class, 'update'])
        ->name('academic-years.update');

    Route::delete('/admin/academic-years/{id}', [AcademicYearController::class, 'destroy'])
        ->name('academic-years.destroy');

    Route::get('/admin/student-class-histories', [StudentClassHistoryController::class, 'index'])
        ->name('student-class-histories.index');

    Route::get('/admin/student-class-histories/create', [StudentClassHistoryController::class, 'create'])
        ->name('student-class-histories.create');

    Route::post('/admin/student-class-histories', [StudentClassHistoryController::class, 'store'])
        ->name('student-class-histories.store');

    Route::get('/admin/student-class-histories/{id}/edit', [StudentClassHistoryController::class, 'edit'])
        ->name('student-class-histories.edit');

    Route::put('/admin/student-class-histories/{id}', [StudentClassHistoryController::class, 'update'])
        ->name('student-class-histories.update');

    Route::delete('/admin/student-class-histories/{id}', [StudentClassHistoryController::class, 'destroy'])
        ->name('student-class-histories.destroy');
});

Route::middleware(['auth', 'role:guru'])->group(function () {

    Route::get('/guru/dashboard', function () {
        return view('guru.dashboard');
    });
});

require __DIR__ . '/auth.php';
