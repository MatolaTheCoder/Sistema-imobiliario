<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'transacao_id',
        'metodo_pagamento_id',
        'user_id',
        'valor',
    ];

    public function transacao()
    {
        return $this->belongsTo(Transacao::class);
    }

    public function metodoPagamento()
    {
        return $this->belongsTo(MetodoPagamento::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
