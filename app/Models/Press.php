<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $table = 'presses';

    protected $fillable = [
        'date',
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
