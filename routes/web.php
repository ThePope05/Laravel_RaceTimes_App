<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CircuitController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/circuit', [CircuitController::class, 'index'])->name('circuit.index');
    Route::get('/circuit/create', [CircuitController::class, 'create'])->name('circuit.create');
    Route::post('/circuit', [CircuitController::class, 'store'])->name('circuit.store');
    Route::get('/circuit/{circuit}', [CircuitController::class, 'show'])->name('circuit.show');
    Route::get('/circuit/{circuit}/edit', [CircuitController::class, 'edit'])->name('circuit.edit');
    Route::patch('/circuit/{circuit}', [CircuitController::class, 'update'])->name('circuit.update');
    Route::delete('/circuit/{circuit}', [CircuitController::class, 'destroy'])->name('circuit.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/time', [TimeController::class, 'index'])->name('time.index');
    Route::get('/time/create', [TimeController::class, 'create'])->name('time.create');
    Route::post('/time', [TimeController::class, 'store'])->name('time.store');
    Route::get('/time/{time}', [TimeController::class, 'show'])->name('time.show');
    Route::get('/time/{time}/edit', [TimeController::class, 'edit'])->name('time.edit');
    Route::patch('/time/{time}', [TimeController::class, 'update'])->name('time.update');
    Route::delete('/time/{time}', [TimeController::class, 'destroy'])->name('time.destroy');
});

require __DIR__ . '/auth.php';
