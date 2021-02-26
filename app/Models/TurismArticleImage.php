<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurismArticleImage extends Model
{
    protected $table = 'turism_article_images';

    protected $fillable = [
        'image',
        'turism_article_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function turismArticle()
    {
        return $this->belongsTo(TurismArticle::class);
    }
}
