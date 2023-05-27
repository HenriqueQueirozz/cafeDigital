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
        Schema::table('cafe_enderecos', function (Blueprint $table) {
            $table->foreign('fk_idEstado_end')->references('id_est')->on('cafe_estados');
            $table->foreign('fk_idCidade_end')->references('id_cid')->on('cafe_cidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_enderecos', function (Blueprint $table) {
            $table->dropForeign(['fk_idEstado_end']);
            $table->dropForeign(['fk_idCidade_end']);
        });
    }
};
