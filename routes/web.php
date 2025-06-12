<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('links.index');
})->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('links', LinkController::class);
    Route::resource('collections', CollectionController::class);
});


// this route must to be the last because there is a precedence order.
Route::get('/{user}', UserController::class);

require __DIR__.'/auth.php';
