<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SaleController;
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
    return view('auth.login');
})->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/historico-de-vendas', [SaleController::class, 'index'])
        ->name('dashboard.historico.de.vendas.index');

    Route::get('/historico-de-vendas/tree-map', [SaleController::class, 'getDataTreeMap'])
        ->name('dashboard.historico.de.vendas.tree.map');
});
