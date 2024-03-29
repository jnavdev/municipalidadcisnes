<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MunicipalService extends Model
{
    use SoftDeletes;

    protected $table = 'municipal_services';

    protected $fillable = [
        'image',
        'title',
        'body',
        'slug',
        'text',
        'url',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function images()
    {
        return $this->hasMany(MunicipalServiceImage::class);
    }
}
