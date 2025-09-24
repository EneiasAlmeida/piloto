<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get( '/', [EventController::class, 'index'])->name('event.index');
Route::get( '/event/create',  [EventController::class, 'create'])->name('event.create');
Route::post( '/event/store' , [EventController::class,'store'])->name('event.store');
Route::get( '/event/show', [EventController::class,'show'])->name('event.show');
Route::get( '/event/edit', [EventController::class,'edit'])->name('event.edit');
Route::put( '/event/update', [EventController::class,'update'])->name('event.update');


