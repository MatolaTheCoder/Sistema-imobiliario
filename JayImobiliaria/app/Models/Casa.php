<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
    protected $fillable = [
        'endereco',
        'cidade',
        'bairro',
        'preco_venda',
        'preco_aluguel',
        'complemento',
        'largura',
        'descricao',
        'quartos',
        'banheiros',
        'mobiliado',
        'estado_casa_id',
        'descricao_mobilia',
    ];

    public function estadoCasa()
    {
        return $this->belongsTo(EstadoCasa::class);
    }
}
