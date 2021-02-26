<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleAudio extends Model
{
    use SoftDeletes;

    protected $table = 'article_audios';

    protected $fillable = [
        'url',
        'article_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
