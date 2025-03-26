<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class PlatformKey extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = ['key'];

    // Define translatable attributes
    public $translatedAttributes = ['translation'];

    public function translations_array()
    {
        return $this->hasMany(PlatformKeyTranslation::class, 'platform_key_id');
    }

}
