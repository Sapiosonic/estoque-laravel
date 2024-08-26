<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produto.lista');
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra'])->name('produto.mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', [ProdutoController::class, 'novo'])->name('produto.novo');
Route::post('/produtos/adiciona', [ProdutoController::class, 'adiciona']);
Route::get('/produtos/remove/{id}', [ProdutoController::class, 'remove'])->name('produto.remove');
Route::get('/produtos/edita/{id}', [ProdutoController::class, 'edita'])->name('produto.edita');
Route::post('/produtos/altera/{id}', [ProdutoController::class, 'altera'])->name('produto.altera')->where('id', '[0-9]+');
Route::get("/register", [RegisterController::class, 'create'])->name('register');
Route::post("/register", [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LogoutController::class, '__invoke'])->name('logout');

Route::get('/home', function () {
    return view('home');
});