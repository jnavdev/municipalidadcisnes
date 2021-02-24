<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $fillable = [
        'image',
        'article_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
