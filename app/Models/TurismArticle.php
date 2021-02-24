<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TurismArticle extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image',
        'title',
        'body',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function images()
    {
        return $this->hasMany(TurismArticleImage::class);
    }
}
