<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // for API
        /* $config_local = config('app.locale');
        if (!empty(getlanguages())) {
            foreach (getlanguages() as $lang) {
                $config_local = implode(',', $lang->lang_code);
            }
        }
        dd($config_local);
        $locale = $request->header('language', 'en');
        if (in_array($locale, $config_local)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale(config('app.locale'));
        } */
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        }

        return $next($request);
    }
}
