<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'cafe_usuarios';
    

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome_usu',
        'email_usu',
        'codigo_usu',
        'dataNascimento_usu',
        'sexo_usu',
        'password',
        'type_usu',
        'cpf_usu',
        'rg_usu',
        'fk_idTipoPerfil_usu',
        'fk_idAberturaEtapa_usu',
        'fk_idFotoPerfil_usu',
        'fk_idEndereco_usu',
        'fk_idUsuarioIndicacao',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
