<?php

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PointController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('points')->middleware('auth')->group(function () {
    Route::any('/search', [PointController::class, 'search'])->name('points.search');
    Route::get('/create', [PointController::class, 'create'])->name('points.create');
    Route::put('/{id}', [PointController::class, 'update'])->name('points.update');
    Route::get('/edit/{id}', [PointController::class, 'edit'])->name('points.edit');
    Route::delete('/{id}', [PointController::class, 'destroy'])->name('points.destroy');
    Route::get('/{id}', [PointController::class, 'show'])->name('points.show');
    Route::post('', [PointController::class, 'store'])->name('points.store');
    Route::get('/', [PointController::class, 'index'])->name('points.index');
});

Route::prefix('password')->middleware('auth')->group(function () {
    Route::put('/{id}', [PasswordController::class, 'update'])->name('password.update');
    Route::get('/edit/{id}', [PasswordController::class, 'edit'])->name('password.edit');
});

require __DIR__ . '/auth.php';
