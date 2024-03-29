<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeCidade extends Model
{
    protected $table = 'cafe_cidades';
    protected $primaryKey = 'id_cid';

    use HasFactory;

    protected $fillable = [
        'nome_cid',
        'ibge_cid',
        'fk_idEstado_end'
    ];
}
