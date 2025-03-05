<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagemCasa extends Model
{
    protected $fillable = [
        'casa_id',
        'url',
    ];

    public function casa()
    {
        return $this->belongsTo(Casa::class);
    }
}
