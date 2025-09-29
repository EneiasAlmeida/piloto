<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Console\ViewMakeCommand;
use App\Http\Controllers\LoginController;

// Rotas de evento
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/list', [EventController::class, 'listagem'])->name('event.list');
Route::get('/event/create',  [EventController::class, 'create'])->name('event.create');
Route::post('/event', [EventController::class, 'store'])->name('event.store');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('event/{id}', [EventController::class, 'destroy'])->name('event.destroy');
Route::get('/event/filter', [EventController::class, 'filter'])->name('event.filter');

Route::get('/dashboard', function (): View {
    return view('dashboard');
})->name('dashboard');

Route::get('/relatorios', function () {
    return view('listagem');
})->name('relatorios');

// Rotas do login / Usuário
Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::get('/login/create', [LoginController::class, 'create'])->name('login.create');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');