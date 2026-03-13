<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Spotify\SpotifyExtendSocialite;
use SocialiteProviders\Discord\DiscordExtendSocialite;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        app('events')->listen(
            SocialiteWasCalled::class,
            SpotifyExtendSocialite::class
        );

        app('events')->listen(
            SocialiteWasCalled::class,
            DiscordExtendSocialite::class
        );
    }

}