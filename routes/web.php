<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClassController;
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
});

Route::middleware(['auth', 'role:guru'])->group(function () {

    Route::get('/guru/dashboard', function () {
        return view('guru.dashboard');
    });
});

require __DIR__ . '/auth.php';
