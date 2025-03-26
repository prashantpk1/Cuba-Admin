<?php

use Carbon\Carbon;
use App\Models\Module;
use App\Models\Country;
use App\Models\Service;
use App\Models\Language;
use App\Models\Translation;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;
use Spatie\Permission\Models\Role;

if (!function_exists('static_asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool|null $secure
     * @return string
     */
    function static_asset($path, $secure = null)
    {
        return app('url')->asset('public/' . $path, $secure);
    }
}

if (!function_exists('getPermission')) {
    function getPermission()
    {
        $permission_group = Permission::get()->groupBy('module_name');
        return $permission_group;
    }
}

if (!function_exists('getmodules')) {
    function getmodules()
    {
        $module = Module::get();
        return $module;
    }
}

if (!function_exists('translate')) {
    /**
     * Method translate
     *
     * @param int  $code [explicite share code]
     *
     * @return array
     */
    function translate($key, $lang = null, $addslashes = false)
    {
        if ($lang == null) {
            $lang = App::getLocale();
        }

        $lang_key = preg_replace('/[^A-Za-z0-9\_]/', '', str_replace(' ', '_', strtolower($key)));

        $translations_en = Cache::rememberForever('translations-en', function () {
            return Translation::where('lang', 'en')->pluck('lang_value', 'lang_key')->toArray();
        });


        if (!isset($translations_en[$lang_key])) {
            $translation_def = new Translation();
            $translation_def->lang = 'en';
            $translation_def->lang_key = $lang_key;
            $translation_def->lang_value = str_replace(array("\r", "\n", "\r\n"), "", $key);
            $translation_def->save();
            Cache::forget('translations-en');
        }

        // return user session lang
        $translation_locale = Cache::rememberForever("translations-{$lang}", function () use ($lang) {
            return Translation::where('lang', $lang)->pluck('lang_value', 'lang_key')->toArray();
        });
        if (isset($translation_locale[$lang_key])) {
            return $addslashes ? addslashes(trim($translation_locale[$lang_key])) : trim($translation_locale[$lang_key]);
        }

        // fallback to en lang
        if (!isset($translations_en[$lang_key])) {
            return trim($key);
        }
        return $addslashes ? addslashes(trim($translations_en[$lang_key])) : trim($translations_en[$lang_key]);
    }




    //get compressImage
    if (!function_exists('compressImage')) {
        function compressImage($source, $destination)
        {
            // Get image info
            //for $quality change 1 -100
            $quality = 10;
            $imgInfo = getimagesize($source);
            $mime = $imgInfo['mime'];

            // Check image size
            $fileSize = filesize($source); // in bytes
            $quality = ($fileSize > 1024 * 1024) ? $quality : 100; // Check if size is greater than 1 MB

            // Create a new image from file
            switch ($mime) {
                case 'image/jpeg':
                    $image = imagecreatefromjpeg($source);
                    break;
                case 'image/png':
                    $image = imagecreatefrompng(filename: $source);
                    break;
                case 'image/gif':
                    $image = imagecreatefromgif($source);
                    break;
                case 'image/jpg':
                    $image = imagecreatefromjpg($source);
                    break;
                default:
                    $image = imagecreatefromjpeg($source);
            }

            // Save image
            imagejpeg($image, $destination, $quality);

            // Return compressed image
            return $destination;
        }

    }


    if (!function_exists('getlanguages')) {
        function getlanguages()
        {
            $lang = Language::get();
            return $lang;
        }
    }

    if (!function_exists('getlanguagesimploade')) {
        function getlanguagesimploade()
        {
            $lang = Language::get();
            $allLangs = [];
            foreach ($lang as $l) {
                $allLangs[] = $l->lang_code;
                // return implode(',', $l->lang_code);
            }
            return (array) $allLangs;
        }
    }


    if (!function_exists('getCountries')) {
        function getCountries()
        {
            $lang = Country::get();
            return $lang;
        }
    }

    if (!function_exists('getServices')) {
        function getServices()
        {
            $lang = Service::get();
            return $lang;
        }
    }


    if (!function_exists('generateUniqueFilename')) {
        function generateUniqueFilename($file, $imageName)
        {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . $imageName . '.' . $extension;
            Storage::disk('public')->putFileAs($imageName, $file, $filename);
            $source = $_FILES[$imageName]['tmp_name'];
            compressImage($source, Storage::disk('public')->putFileAs($imageName, $file, $filename));
            return $filename;
        }
    }

    if (!function_exists('getSettings')) {
        function getSettings()
        {
            return Setting::first();
        }
    }


    if (!function_exists('getRoles')) {
        function getRoles()
        {
            $data = Role::get();
            return $data;
        }
    }

    if (!function_exists('getBanners')) {
        function getBanners($bannerArray)
        {
            return [
                'banner_image' => $bannerArray->banner_image ?? '',
                'banner_heading' => $bannerArray->banner_heading ?? '',
                'banner_title' => $bannerArray->banner_title ?? '',
                'button_text' => $bannerArray->button_text ?? '',
                'banner_description' => $bannerArray->banner_description ?? '',
            ];
        }
    }





}
