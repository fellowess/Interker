<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_hu',
        'short_desc_hu',
        'long_desc_hu',
        'title_en',
        'title_fr',
        'title_it',
        'short_desc_en',
        'short_desc_fr',
        'short_desc_it',
        'long_desc_en',
        'long_desc_fr',
        'long_desc_it',
    ];
}
