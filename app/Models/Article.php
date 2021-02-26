<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'articles';

    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'body',
        'slug',
        'on_slider',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function audios()
    {
        return $this->hasMany(ArticleAudio::class);
    }

    public function videos()
    {
        return $this->hasMany(ArticleVideo::class);
    }
}
