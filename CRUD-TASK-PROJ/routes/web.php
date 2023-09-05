<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\updateController;
use App\Http\Controllers\CreateController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/update/{id}', [updateController::class, 'getupdate']);
Route::post('/update/{id}', [updateController::class, 'updateData'])->name('update');


// Define a GET route for showing the form
Route::get('/create', [CreateController::class, 'create'])->name('create');

// Define a POST route for handling the form submission
Route::post('/create', [CreateController::class, 'store']);
Route::get('/index', [CreateController::class, 'index'])->name('index');

