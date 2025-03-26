<?php



use PhpParser\Node\Stmt\Label;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\SubAdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TranslationController;


Route::get('/clear-optimize', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:cache');
    return 'Route cache cleared!';
});


Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin/login');
Route::post('admin-login', [AdminController::class, 'storeLogin'])->name('admin-login');



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::patch('/profile', [AdminController::class, 'update'])->name('profile.update');
    Route::post('/getChangePassword', [AdminController::class, 'storeChangePassword'])->name('store.change.password');
    Route::get('/setting', [AdminController::class, 'setting'])->name('setting');


    Route::resource('language', LanguageController::class);
    // Category

   // Route::resource('platform-lang', PaltformLangController::class);
   Route::resource('translation', TranslationController::class);

    Route::resource('module', ModuleController::class);
    Route::get('module-status/{id}', [ModuleController::class, 'moduleStatus'])->name('module.status');
    Route::resource('permission', PermissionController::class);
    Route::get('permission-status/{id}', [PermissionController::class, 'permissionStatus'])->name('permission.status');

    // role route
    Route::resource('role', RoleController::class);
    Route::get('role-status/{id}', [RoleController::class, 'roleStatus'])->name('role.status');

    // sub-admin route
    Route::resource('sub-admin', SubAdminController::class);
    Route::get('sub-admin-status/{id}', [SubAdminController::class, 'subadminStatus'])->name('sub-admin.status');

    // Settings routes
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings/update', [SettingController::class, 'update'])->name('settings.update');

});


