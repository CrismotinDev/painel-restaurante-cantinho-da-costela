<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\PainelController;
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

Route::get('/', [PainelController::class, 'index'])->name('painel');

Route::get('/historia', [HistoriaController::class, 'index'])->name('historia');

Route::get('/cardapio', [CardapioController::class, 'index'])->name('cardapio');

Route::get('/eventos', [EventosController::class, 'index'])->name('eventos');
