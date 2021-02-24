<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MunicipalServiceImage extends Model
{
    protected $fillable = [
        'image',
        'municipal_service_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function municipal_service()
    {
        return $this->belongsTo(MunicipalService::class);
    }
}
