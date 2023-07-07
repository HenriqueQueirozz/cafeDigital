<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeEndereco extends Model
{
    protected $table = 'cafe_enderecos';
    protected $primaryKey = 'id_end';

    use HasFactory;

    protected $fillable = [
        'rua_end',
        'bairro_end',
        'numero_end',
        'cep_end',
        'complemento_end',
        'fk_idEstado_end',
        'fk_idCidade_end',
    ];
}
