<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cafe_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_usu', 100);
            $table->date('dataNascimento_usu')->nullable();
            $table->string('email_usu')->unique();
            $table->string('codigo_usu')->unique()->nullable();
            $table->enum('sexo_usu', ['M', 'F', '0'])->nullable();
            $table->string('password');
            $table->char('cpf_usu', 11)->unique()->nullable();
            $table->char('rg_usu', 9)->unique()->nullable();
            $table->unsignedBigInteger('fk_idTipoPerfil_usu')->nullable();
            $table->unsignedBigInteger('fk_idAberturaEtapa_usu')->default(1);
            $table->unsignedBigInteger('fk_idFotoPerfil_usu')->nullable();
            $table->unsignedBigInteger('fk_idEndereco_usu')->nullable();
            $table->unsignedBigInteger('fk_idUsuarioIndicacao')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_usuarios');
    }
};
