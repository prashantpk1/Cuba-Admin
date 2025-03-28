<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Country extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = "countries";
    protected $fillable = ['iso','name','nicename','iso3','numcode','phonecode'];

    // Define translatable attributes
    public $translatedAttributes = ['translation'];


}

