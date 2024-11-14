<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GamerController;

//GAME
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::patch('/games/{game}', [GameController::class, 'update'])->name('games.update');
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');

//GAMERS
Route::post('/gamers', [GamerController::class, 'store'])->name('gamers.store');
Route::get('/gamers/create', [GamerController::class, 'create'])->name('gamers.create');
Route::patch('/gamers/{gamer}', [GamerController::class, 'update'])->name('gamers.update');
Route::get('/gamers/{gamer}/edit', [GamerController::class, 'edit'])->name('gamers.edit');
Route::delete('/gamers/{gamer}', [GamerController::class, 'destroy'])->name('gamers.destroy');
Route::get('/gamers', [GamerController::class, 'index'])->name('gamers.index');
Route::get('/gamers/{gamer}', [GamerController::class, 'show'])->name('gamers.show');