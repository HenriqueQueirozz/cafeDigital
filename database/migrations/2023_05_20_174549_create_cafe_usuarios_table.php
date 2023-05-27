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
            $table->id('id_usu');
            $table->string('nome_usu', 100);
            $table->date('dataNascimento_usu');
            $table->enum('sexo_usu', ['M', 'F', '0']);
            $table->string('senha_usu', 20);
            $table->char('cpf_usu', 11)->unique();
            $table->char('rg_usu', 9)->unique();
            $table->unsignedBigInteger('fk_idTipoPerfil_usu');
            $table->unsignedBigInteger('fk_idFotoPerfil_usu');
            $table->unsignedBigInteger('fk_idEndereco_usu');
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
