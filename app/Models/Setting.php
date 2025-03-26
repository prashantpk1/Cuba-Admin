<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'logo',
        'address',
        'email',
        'contact_number',
        'whatsapp_number',
        'about_us',
        'facebook',
        'twitter',
        'linkedin',
        'instagram', 
        'google_play',
        'play_store',   
    ];

    public function getLogoAttribute($value)
    {
        if ($value) {
            return asset('public/settinglogo/' . $value);
        }
       
    }
}

