<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produto.lista');
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra'])->name('produto.mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', [ProdutoController::class, 'novo'])->name('produto.novo');
Route::post('/produtos/adiciona', [ProdutoController::class, 'adiciona']);
Route::get('/produtos/remove/{id}', [ProdutoController::class, 'remove'])->name('produto.remove');
Route::get('/produtos/edita/{id}', [ProdutoController::class, 'edita'])->name('produto.edita');
Route::post('/produtos/altera/{id}', [ProdutoController::class, 'altera'])->name('produto.altera')->where('id', '[0-9]+');