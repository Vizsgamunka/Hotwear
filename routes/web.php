<?php

use App\Http\Controllers\TervezoController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/felhasznalok', [UserController::class, 'index']);
Route::get('/api/felhasznalo_keres/{id}', [UserController::class, 'show']);
Route::delete('/api/felhasznalo_torol/{id}', [UserController::class, 'destroy']);
Route::get('/api/tervezok', [TervezoController::class, 'index']);
Route::get('/api/tervezo_keres/{id}', [TervezoController::class, 'show']);
Route::get('/api/tervezo_torol/{id}', [TervezoController::class, 'destroy']);
