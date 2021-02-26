<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getImage()
    {
        $image = $this->images()->first();

        return asset("uploads/images/{$image->name}");
    }
}
