<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeFotoPerfil extends Model
{
    protected $table = 'cafe_foto_perfis';
    protected $primaryKey = 'id_fp';

    use HasFactory;

    protected $fillable = [
        'nomeFoto_fp',
    ];
}
