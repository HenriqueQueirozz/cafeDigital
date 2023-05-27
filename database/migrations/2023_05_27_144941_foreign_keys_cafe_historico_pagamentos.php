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
        Schema::table('cafe_historico_pagamentos', function (Blueprint $table) {
            $table->foreign('fk_idUsuario_hp')->references('id_usu')->on('cafe_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_historico_pagamentos', function (Blueprint $table) {
            $table->dropForeign(['fk_idUsuario_hp']);
        });
    }
};
