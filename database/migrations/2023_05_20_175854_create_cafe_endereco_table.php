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
        Schema::create('cafe_endereco', function (Blueprint $table) {
            $table->id('id_end');
            $table->string('rua_end', 40);
            $table->string('bairro_end', 45);
            $table->char('numero_end', 4);
            $table->char('cep_end', 8);
            $table->text('complemento_end');
            $table->integer('fk_idEstado_end');
            $table->integer('fk_idCidade_end');

            $table->foreign('fk_idEstado_end')->references('id_est')->on('cafe_estado');
            $table->foreign('fk_idCidade_end')->references('id_cid')->on('cafe_cidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_endereco');
    }
};
