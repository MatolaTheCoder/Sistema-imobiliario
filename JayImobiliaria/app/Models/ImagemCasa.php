<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemCasa extends Model
{
    use HasFactory;
    protected $fillable = [
        'casa_id',
        'url',
    ];

    public function casa()
    {
        return $this->belongsTo(Casa::class);
    }
}
