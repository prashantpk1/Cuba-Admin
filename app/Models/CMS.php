<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Astrotomic\Translatable\Translatable;

class CMS extends Model
{
    // use Translatable;
    protected $fillable = [
        'title',
        'fairer_count_1',
        'fairer_count_2',
        'fairer_count_3',
        'fairer_count_4',

        'banner_image',
        'service_images_1',
        'service_images_2',
        'service_images_3',
        'service_images_4',
        'cab_images',
        'cab_images_2',
        'cab_images_3',
        'priority_image',
        'about_image_1',
        'about_image_2',
        'about_image_3',
        'our_app_image_1',
        'our_app_image_2',
        'our_app_image_3',

        'meta_title',
        'meta_description',
    ];

    protected $table = 'cms';

    // public $translatedAttributes = ['translation'];


    // public function getBannerImageAttribute($value)
    // {
    //     if ($value) {
    //         return asset('public/cms/' . $value);
    //     }
    // }

    public function getAttribute($key)
    {
        $imageFields = [
            'banner_image',
            'service_images_1',
            'service_images_2',
            'service_images_3',
            'service_images_4',
            'cab_images',
            'cab_images_2',
            'cab_images_3',
            'priority_image',
            'about_image_1',
            'about_image_2',
            'about_image_3',
            'our_app_image_1',
            'our_app_image_2',
            'our_app_image_3',
        ];

        // Check if the attribute is an image field
        if (in_array($key, $imageFields)) {
            $value = parent::getAttribute($key);
            return $value ? asset('public/' . $value) : null;
        }

        // For other attributes, use the default behavior
        return parent::getAttribute($key);
    }

    public function translations_array()
    {
        return $this->hasMany(CMSTranslation::class, 'cms_id');
    }

    public function translate($locale): CMSTranslation|null
    {
        // dd($locale);
        return $this->translations()->where('locale', $locale)->first();
    }

    public function translations()
    {
        return $this->hasMany(CMSTranslation::class, 'cms_id');
    }

}
