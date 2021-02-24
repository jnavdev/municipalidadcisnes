<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name',
        'album_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function getImage()
    {
        return asset("uploads/images/{$this->name}");
    }
}
