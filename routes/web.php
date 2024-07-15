<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/students', [StudentController::class, 'index']);
    Route::post('/students', [StudentController::class, 'store']);
    Route::get('/fetch-students', [StudentController::class, 'fetchstudent']);
    Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
    Route::put('/update-student/{id}', [StudentController::class, 'update']);
    Route::delete('/delete-student/{id}', [StudentController::class, 'destroy']);


});

require __DIR__.'/auth.php';
