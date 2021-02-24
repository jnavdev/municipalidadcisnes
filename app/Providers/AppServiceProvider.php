<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use RUT;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Carbon::setLocale('es');

        Validator::extend('youtube', function($attribute, $value, $parameters)
        {
            $rx = '~
                ^(?:https?://)?              # Optional protocol
                 (?:www\.)?                  # Optional subdomain
                 (?:youtube\.com|youtu\.be)  # Mandatory domain name
                 /watch\?v=([^&]+)           # URI with video id as capture group 1
                 ~x';

            if (preg_match($rx, $value, $matches)) {
                return true;
            } else {
                return false;
            }
        });

        Validator::extend('soundcloud', function($attribute, $value, $parameters)
        {
            $rx = '/^https?:\/\/(soundcloud\.com|snd\.sc)\/(.*)$/';

            if (preg_match($rx, $value, $matches))
            {
                return true;
            } else {
                return false;
            }
        });

        Validator::extend('rut', function($attribute, $value, $parameters)
        {
            if (RUT::check($value)) {
                return true;
            }

            return false;
        });
    }

    public function register()
    {
        //
    }
}
