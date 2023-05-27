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
        Schema::create('cafe_contato', function (Blueprint $table) {
            $table->id('id_con');
            $table->string('contato_con', 100);
            $table->integer('fk_idTipoContato_con');
            $table->integer('fk_idUsuario_con');

            $table->foreign('fk_idTipoContato_con')->references('id_tp')->on('cafe_tipo_contato');
            $table->foreign('fk_idUsuario_con')->references('id_usu')->on('cafe_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_contato');
    }
};
