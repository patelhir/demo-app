<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\MerchantsController;

Route::get('/', [MerchantsController::class, 'index'])
    ->name('home');

Route::get('/merchants', [MerchantsController::class, 'index'])
    ->name('merchants.index');

Route::get('/merchants/{merchant}/notes', [NotesController::class, 'index'])
    ->name('merchants.notes.index');

Route::get('/merchants/{merchant}/notes/create', [NotesController::class, 'create'])
    ->name('merchants.notes.create');

Route::get('/notes/{note}/edit', [NotesController::class, 'edit'])
    ->name('notes.edit');

Route::put('/notes/{note}', [NotesController::class, 'update'])->name('notes.update');

Route::post('/notes/create', [NotesController::class, 'store'])->name('notes.store');

Route::delete('/notes/{note}', [NotesController::class, 'destroy'])->name('notes.destroy');
