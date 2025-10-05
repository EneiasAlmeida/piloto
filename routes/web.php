<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Rotas dos eventos
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/{id}/detalhes', [EventController::class, 'show'])->name('event.detalhes');
Route::get('/event/list', [EventController::class, 'listagem'])->name('event.list');
Route::get('/event/create',  [EventController::class, 'create'])->name('event.create');
Route::post('/event', [EventController::class, 'store'])->name('event.store');
Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('event.destroy');
Route::get('/event/filter', [EventController::class, 'filter'])->name('event.filter');

// Rotas de autenticação e usuário
// Tela de login
Route::get('/', [LoginController::class, 'show'])->name('login.show');
// Processar login
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

// Tela de cadastro
Route::get('/login/create', [LoginController::class, 'create'])->name('login.create');
// Processar cadastro
Route::post('/login/register', [RegisterController::class, 'store'])->name('login.register');

// Dashboard - protegido (adicionar middleware para proteger)
Route::get('/dashboard', [LoginController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth.session'); // crie esse middleware para controlar sessão

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Relatórios
Route::get('/relatorios', function () {
    return view('listagem');
})->name('relatorios');
