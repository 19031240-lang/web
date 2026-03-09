<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'mostrarLogin']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});