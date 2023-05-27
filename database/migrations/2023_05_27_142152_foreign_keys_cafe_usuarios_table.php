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
        Schema::table('cafe_usuarios', function (Blueprint $table) {
            $table->foreign('fk_idTipoPerfil_usu')->references('id_tp')->on('cafe_tipo_perfis');
            $table->foreign('fk_idFotoPerfil_usu')->references('id_fp')->on('cafe_foto_perfis');
            $table->foreign('fk_idEndereco_usu')->references('id_end')->on('cafe_enderecos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_usuarios', function (Blueprint $table) {
            $table->dropForeign(['fk_idTipoPerfil_usu']);
            $table->dropForeign(['fk_idFotoPerfil_usu']);
            $table->dropForeign(['fk_idEndereco_usu']);
        });
    }
};
