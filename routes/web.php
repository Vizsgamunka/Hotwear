<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TervezoController;
use App\Http\Controllers\TermekController;
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
    return view('pages/welcome');
});
Route::get('/tervezo', function () {
    return view('pages/tervezo');
});
Route::get('/ruha', function () {
    return view('pages/ruha');
});
Route::get('/rendeles', function () {
    return view('pages/rendeles');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/api/felhasznalok', [UserController::class, 'index']);
Route::get('/api/felhasznalo_keres/{id}', [UserController::class, 'show']);
Route::delete('/api/felhasznalo_torol/{id}', [UserController::class, 'destroy']);
Route::get('/api/tervezok', [TervezoController::class, 'index']);
Route::get('/api/tervezo_keres/{id}', [TervezoController::class, 'show']);
Route::get('/api/tervezo_torol/{id}', [TervezoController::class, 'destroy']);
Route::get('/api/kategoriak', [KategoriaController::class, 'index']);
Route::get('/api/kategoria_keres/{id}', [KategoriaController::class, 'show']);
Route::get('/api/kategoria_torol/{id}', [KategoriaController::class, 'destroy']);


Route::get('/api/termekek', [TermekController::class, 'osszesTermek']);
Route::get('/api/termek/{id}', [TermekController::class, 'termek']);
Route::get('/api/termekhez_tartozo_nev/{id}', [TermekController::class, 'termekhez_tartozo_nev']);
Route::get('/api/termekhez_tartozo_kep/{id}', [TermekController::class, 'termekhez_tartozo_kep']);


Route::get('/api/kategoriahoz_tartozo_termekek/{id}', [KategoriaController::class, 'adott_kategoriahoz_tartozo_termekek']);
Route::get('/api/tervezohoz_tartozo_termekek/{id}', [TervezoController::class, 'adott_tervezohoz_tartozo_termekek']);