<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CreateController;

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
Route::get('create', function () {
    return view('create');
})->name('create');

// Route::get('/create',CreateController::class,'create');
// Route::POST('/create',CreateController::class,'store');

// Route::controller(CreateController::class)->group(function () {
//     Route::get('/create', 'index');
//     Route::get('/create/create', 'create');
//     Route::POST('/students', 'store');
// });
use App\Http\Controllers\CreateController;

// Define a GET route for showing the form
Route::get('/create', [CreateController::class, 'create']);

// Define a POST route for handling the form submission
Route::post('/create', [CreateController::class, 'store']);

