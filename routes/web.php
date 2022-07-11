<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ PageController::class, 'home'])->name('home');

Route::get('course/{course:slug}',[ PageController::class, 'course'])->name('course');
Route::get('course-create', [ PageController::class, 'createCourse'])->name('create');
Route::post('course-create', [ PageController::class, 'store'])->name('store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
