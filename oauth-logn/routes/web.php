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

Route::get('/login/discord', function () {
    return Socialite::driver('discord')->redirect();
});

Route::get('/login/discord/callback', function () {

    $user = Socialite::driver('discord')->user();

    return "Bienvenido Discord".$user->getName();

});