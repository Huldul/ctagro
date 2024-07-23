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

        // Проверяем, соответствует ли текущий запрос одному из исключённых путей
        foreach ($excludedPaths as $path) {
            if ($request->is($path)) {
                return $next($request); // Пропускаем дальше без изменения
            }
        }

        // Допустимые локали
        $locales = config('app.locales', ['ru', 'kz', 'en']);

        // Определяем локаль из первого сегмента URL
        $locale = $request->segment(1);

        // Проверяем, допустима ли эта локаль
        if (in_array($locale, $locales)) {
            App::setLocale($locale);

            // Если локаль 'ru', убираем её из URL
            if ($locale === 'ru') {
                $newUrl = $request->getRequestUri();
                $newUrl = preg_replace('#^/ru(/|$)#', '/', $newUrl);
                return redirect($newUrl);
            }
        } else {
            // Локаль по умолчанию
            $locale = 'ru';
            App::setLocale($locale);
        }

        // Если локаль не 'ru' и её нет в URL, добавляем её в URL
        if ($locale !== 'ru' && !in_array($request->segment(1), $locales)) {
            $newUrl = '/' . $locale . $request->getPathInfo();
            return redirect($newUrl);
        }

        return $next($request);
    }
}
