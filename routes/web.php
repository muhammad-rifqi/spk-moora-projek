<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\MooraController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/candidates', [CandidateController::class, 'index']);
    Route::get('/candidates/add', [CandidateController::class, 'create']);
    Route::post('/candidates/store', [CandidateController::class, 'store']);
    Route::get('/candidates/edit/{id}', [CandidateController::class, 'edit']);
    Route::post('/candidates/update/{id}', [CandidateController::class, 'update']);
    Route::get('/candidates/delete/{id}', [CandidateController::class, 'destroy']);
    
    
    Route::get('/criteria', [CriteriaController::class, 'index']);
    Route::get('/criteria/add', [CriteriaController::class, 'create']);
    Route::post('/criteria/store', [CriteriaController::class, 'store']);
    Route::get('/criteria/edit/{id}', [CriteriaController::class, 'edit']);
    Route::post('/criteria/update/{id}', [CriteriaController::class, 'update']);
    Route::get('/criteria/delete/{id}', [CriteriaController::class, 'destroy']);

    Route::get('/moora/process',
        [MooraController::class, 'process'])
        ->name('moora.process');
});

require __DIR__.'/auth.php';
