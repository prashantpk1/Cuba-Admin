<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MyLanguageCustomMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Ensure user is authenticated before accessing Auth::user()
        // dd(Auth::check());
        if (Auth::check()) {
            $user = Auth::user(); // Get authenticated user
            $lang = UserLanguage::where("user_id",$user->id)->first();
            $locale = @$lang->language ?? session('locale', 'en'); // Get language from DB or session
        } else {
            $locale = session('locale', 'en'); // Default language if user not logged in
        }

        // Set Laravel application locale
        App::setLocale($locale);

        return $next($request);
    }
}
