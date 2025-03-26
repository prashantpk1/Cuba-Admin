<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformKeyTranslation extends Model
{
    public $timestamps = false;
    protected $table = "platform_key_translations";
    protected $fillable = ['platform_key_id','locale','translation'];

    public function platformKey()
    {
        return $this->belongsTo(PlatformKey::class, 'platform_key_id');
    }
}
