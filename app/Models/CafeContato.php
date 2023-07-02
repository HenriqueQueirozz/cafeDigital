<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeContato extends Model
{
    protected $table = 'cafe_contatos';
    use HasFactory;

    protected $fillable = [
        'contato_con',
        'tipo_con',
        'fk_idUsuario_con',
    ];
}
