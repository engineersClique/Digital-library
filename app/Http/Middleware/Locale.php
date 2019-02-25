<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

/**
 * Class Locale
 * @package App\Http\Middleware
 */
class Locale
{
    public function handle($request, Closure $next)
    {
        $language = Session::get('language', Config::get('app.locale'));
        $language = array_key_exists($language, Config::get('languages')) ? $language : Config::get('app.fallback_locale');
        App::setLocale($language);
        return $next($request);
    }
}