<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Laravel\Socialite\Facades\Socialite;

Route::get('/login/discord', function () {
    return Socialite::driver('discord')->redirect();
});

Route::get('/login/discord/callback', function () {
    $user = Socialite::driver('discord')->user();
    return $user;
});