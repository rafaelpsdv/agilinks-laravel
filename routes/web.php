<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('links', LinkController::class);

// Route::get('links', [LinkController::class, 'index'])->name('links.index');
// Route::get('links/create', [LinkController::class, 'create'])->name('links.create');
// Route::post('links',[LinkController::class, 'store'])->name('links.store');
// Route::get('links/{id}/edit', [LinkController::class, 'edit'])->name('links.edit');
// Route::patch('links', [LinkController::class, 'update'])->name('links.update');
