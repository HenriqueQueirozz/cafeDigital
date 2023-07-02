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
            $table->foreign('fk_idAberturaEtapa_usu')->references('id_eta')->on('cafe_abertura_etapas');
            $table->foreign('fk_idUsuarioIndicacao')->references('id')->on('cafe_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_usuarios', function (Blueprint $table) {
            $table->dropForeign(['fk_idAberturaEtapa_usu']);
            $table->dropForeign(['fk_idUsuarioIndicacao']);
        });
    }
};
