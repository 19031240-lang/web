<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/spotify', function () {
    return Socialite::driver('spotify')->redirect();
});

Route::get('/login/spotify/callback', function () {
    $user = Socialite::driver('spotify')->user();

    return "Bienvenido ".$user->getName();
});