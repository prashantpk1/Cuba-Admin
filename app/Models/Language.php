<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages';

    protected $fillable = [
        'lang_name',
        'lang_code',
        'lang_flag',
        'is_default',
        'lang_is_rtl',
        'is_delete',
    ];
}

