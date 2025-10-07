<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// ----------------------------
// ROTAS DE AUTENTICAÇÃO
// ----------------------------

// Tela de login
Route::get('/', [LoginController::class, 'show'])->name('login.show');

// Processar login
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

// Tela de cadastro de usuário
Route::get('/login/create', [LoginController::class, 'create'])->name('login.create');

// Processar cadastro
Route::post('/login/register', [RegisterController::class, 'store'])->name('login.register');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ----------------------------
// DASHBOARD
// ----------------------------
// Protegido por middleware de sessão/autenticação
Route::get('/dashboard', [LoginController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth.session'); // middleware que controla sessão

// ----------------------------
// ROTAS DE EVENTOS
// ----------------------------

// Listagem de todos os eventos
Route::get('/event', [EventController::class, 'index'])->name('event.index');

// Formulário de criação
Route::get('/event/create', [EventController::class, 'create'])->name('event.create');

// Salvar novo evento
Route::post('/event', [EventController::class, 'store'])->name('event.store');

// Formulário de edição
Route::get('/event/{code}/edit', [EventController::class, 'edit'])->name('event.edit');

// Atualizar evento
Route::put('/event/{code}', [EventController::class, 'update'])->name('event.update');

// Exibir detalhes de um evento
Route::get('/event/{code}', [EventController::class, 'show'])->name('event.show');

// Excluir evento
Route::delete('/event/{code}', [EventController::class, 'destroy'])->name('event.destroy');

// Filtrar eventos (opcional)
Route::get('/event/filter', [EventController::class, 'filter'])->name('event.filter');

Route::get('/event/list', [EventController::class, 'index'])->name('event.list');
