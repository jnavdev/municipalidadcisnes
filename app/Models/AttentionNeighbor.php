<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttentionNeighbor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'reason',
        'rut',
        'names',
        'surnames',
        'address',
        'email',
        'phone',
        'message',
        'file',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getFile()
    {
        return asset("uploads/attention_neighbors/{$this->file}");
    }
}
