<?php

use App\Http\Controllers\{
    PhoneController,
    PostController,
};
use App\Http\Controllers\Dashboard\ {
    FairController,
    MarketerController,
    ProfileController,
};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard/noticias', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard.post');
Route::get('/dashboard/perfil', [ProfileController::class, 'index'])->middleware(['auth'])->name('dashboard.profile');
Route::get('/dashboard/feira', [FairController::class, 'index'])->middleware(['auth'])->name('dashboard.fair.index');
Route::get('/dashboard/feira/novo', [FairController::class, 'create'])->middleware(['auth'])->name('dashboard.fair.create');
Route::get('/dashboard/feirante', [MarketerController::class, 'index'])->middleware(['auth'])->name('dashboard.marketer.index');
Route::get('/dashboard/feirante/novo', [MarketerController::class, 'create'])->middleware(['auth'])->name('dashboard.marketer.create');