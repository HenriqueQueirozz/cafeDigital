<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeTipoPerfil extends Model
{
    protected $table = 'cafe_tipo_perfis';
    protected $primaryKey = 'id_tp';

    use HasFactory;

    protected $fillable = [
        'nome_tp',
        'descricao_tp'
    ];
}
