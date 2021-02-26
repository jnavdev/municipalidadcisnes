<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'url',
        'title',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
