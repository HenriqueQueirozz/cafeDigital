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
        Schema::table('cafe_usuario_habilidades', function (Blueprint $table) {
            $table->foreign('fk_idUsuario_uh')->references('id')->on('cafe_usuarios');
            $table->foreign('fk_idHabilidade_uh')->references('id_hab')->on('cafe_habilidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_usuario_habilidades', function (Blueprint $table) {
            $table->dropForeign(['fk_idUsuario_uh']);
            $table->dropForeign(['fk_idHabilidade_uh']);
        });
    }
};
