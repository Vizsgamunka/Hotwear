<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\KepController;
use App\Http\Controllers\ModellController;
use App\Http\Controllers\Rend_tetelController;
use App\Http\Controllers\RendelesController;
use App\Http\Controllers\TervezoController;
use App\Http\Controllers\TermekController;
use App\Http\Controllers\UserController;
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
    Route::get('/product', function () {
        return view('product');
    })->name('product');
    Route::get('/order', function () {
        return view('order');
    })->name('order');
    Route::get('/users', function () {
        return view('users');
    })->name('users');
    Route::get('/profile_show', function () {
        return view('profile/show');
    })->name('profile_show');
});

Route::get('/api/kategoriak', [KategoriaController::class, 'index']);
Route::get('/api/kategoria_keres/{id}', [KategoriaController::class, 'show']);
Route::post('/api/kategoria_tarol', [KategoriaController::class, 'store']);
Route::put('/api/kategoria_frissit/{id}', [KategoriaController::class, 'update']);
Route::delete('/api/kategoria_torol/{id}', [KategoriaController::class, 'destroy']);

Route::get('/api/termekek', [TermekController::class, 'index']);
Route::get('/api/termeks_keres/{id}', [TermekController::class, 'show']);
Route::post('/api/termeks_tarol', [TermekController::class, 'store']);
Route::put('/api/termeks_frissit/{id}', [TermekController::class, 'update']);
Route::delete('/api/termeks_torol/{id}', [TermekController::class, 'destroy']);
Route::get('/api/termekhez_tartozo_nev/{termek_id}', [TermekController::class, 'termekhez_tartozo_modell']);

Route::get('/api/kepek', [KepController::class, 'index']);
Route::get('/api/kep_keres/{id}', [KepController::class, 'show']);
Route::post('/api/kep_tarol', [KepController::class, 'store']);
Route::put('/api/kep_frissit/{id}', [KepController::class, 'update']);
Route::delete('/api/kep_torol/{id}', [KepController::class, 'destroy']);

Route::get('/api/modellek', [ModellController::class, 'index']);
Route::get('/api/modell_keres/{id}', [ModellController::class, 'show']);
Route::post('/api/modell_tarol', [ModellController::class, 'store']);
Route::put('/api/modell_frissit/{id}', [ModellController::class, 'update']);
Route::delete('/api/modell_torol/{id}', [ModellController::class, 'destroy']);

Route::get('/api/rend_tetelek', [Rend_tetelController::class, 'index']);
Route::get('/api/rend_tetels_keres/{id}', [Rend_tetelController::class, 'show']);
Route::post('/api/rend_tetels_tarol', [Rend_tetelController::class, 'store']);
Route::put('/api/rend_tetels_frissit/{id}', [Rend_tetelController::class, 'update']);
Route::delete('/api/rend_tetels_torol/{id}', [Rend_tetelController::class, 'destroy']);

Route::get('/api/rendelesek', [RendelesController::class, 'index']);
Route::get('/api/rendeles_keres/{id}', [RendelesController::class, 'show']);
Route::post('/api/rendeles_tarol', [RendelesController::class, 'store']);
Route::put('/api/rendeles_frissit/{id}', [RendelesController::class, 'update']);
Route::delete('/api/rendeles_torol/{id}', [RendelesController::class, 'destroy']);

Route::get('/api/tervezok', [TervezoController::class, 'index']);
Route::get('/api/tervezo_keres/{id}', [TervezoController::class, 'show']);
Route::post('/api/tervezo_tarol', [TervezoController::class, 'store']);
Route::put('/api/tervezo_frissit/{id}', [TervezoController::class, 'update']);
Route::delete('/api/tervezo_torol/{id}', [TervezoController::class, 'destroy']);

Route::get('/api/felhasznalok', [UserController::class, 'index']);
Route::get('/api/felhasznalo_keres/{id}', [UserController::class, 'show']);
Route::post('/api/felhasznalo_tarol', [UserController::class, 'store']);
Route::put('/api/felhasznalo_frissit/{id}', [UserController::class, 'update']);
Route::delete('/api/felhasznalo_torol/{id}', [UserController::class, 'destroy']);





/*
Route::get('/api/tervezok', [TervezoController::class, 'index']);
Route::get('/api/tervezo_keres/{id}', [TervezoController::class, 'show']);
Route::delete('/api/tervezo_torol/{id}', [TervezoController::class, 'destroy']);
Route::get('/api/kategoriak', [KategoriaController::class, 'index']);
Route::get('/api/kategoria_keres/{id}', [KategoriaController::class, 'show']);
Route::delete('/api/kategoria_torol/{id}', [KategoriaController::class, 'destroy']);
*/
