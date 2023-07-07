<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeEstado extends Model
{
    protected $table = 'cafe_estados';
    protected $primaryKey = 'id_est';

    use HasFactory;

    protected $fillable = [
        'nome_est',
        'ibge_cuf_estid'
    ];

}
