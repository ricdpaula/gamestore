<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GamesController::class, 'index']);
Route::get('/games/criar', [GamesController::class, 'create']);
Route::post('/games/salvar', [GamesController::class, 'insert']);
Route::get('/games/deletar', [GamesController::class, 'delete']);
Route::get('/games/editar', [GamesController::class, 'edit']);
Route::post('/games/editando', [GamesController::class, 'editing']);
