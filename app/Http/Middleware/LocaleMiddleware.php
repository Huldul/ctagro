<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    $excludedPaths = ['admin', 'admin/*', 'sendOrder', 'sendApplication', 'sendRespond', 'search'];

    foreach ($excludedPaths as $path) {
        if ($request->is($path)) {
            return $next($request);
        }
    }

    $locale = $request->segment(1);

    if (in_array($locale, config('app.locales'))) {
        if ($locale === 'ru') {
            App::setLocale($locale);
            $newUrl = str_replace('/' . $locale, '', $request->getRequestUri());
            return redirect($newUrl);
        }
        App::setLocale($locale);
    } else {
        $locale = 'ru';
        App::setLocale($locale);
    }

    return $next($request);
}


}
