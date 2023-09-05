<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\updateController;
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
// Route::get('/update/{id}', function () {
//     return view('update');
// });
Route::get('/update/{id}', [updateController::class, 'getupdate']);
Route::post('/update/{id}', [updateController::class, 'updateData'])->name('update');