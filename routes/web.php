<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\front\HomeController;


Route::get('/clear-optimize', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:cache');
    return 'Route cache cleared!';
});

Route::get('/login', function () {
    return redirect()->route('admin/login');
});
Route::get('/admin', function () {
    return redirect()->route('admin/login');
});
Route::get('/', function () {
    return redirect()->route('admin/login');
});

Route::get('/language/{locale}', function ($locale) {
    // if (in_array($locale, ['en', 'fr', 'es', 'ar', 'ur'])) {
    if (in_array($locale, getlanguagesimploade())) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('set.language');

Route::get('/event', [AdminController::class, 'eventDispatch'])->name('event');
Route::post('/language-change', [AdminController::class, 'languageChange'])->name('language.change');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
