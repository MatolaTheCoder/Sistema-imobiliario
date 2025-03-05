<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $fillable = [
        'casa_id',
        'user_id',
        'tiop',
        'estado',
    ];

    public function casa()
    {
        return $this->belongsTo(Casa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
