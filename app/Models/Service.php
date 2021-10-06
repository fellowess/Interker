<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_hu',
        'logo_en',
        'logo_fr',
        'logo_it',
        'title_hu',
        'title_en',
        'title_fr',
        'title_it',
        'short_desc_hu',
        'short_desc_en',
        'short_desc_fr',
        'short_desc_it',
    ];
}
