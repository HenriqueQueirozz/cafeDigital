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
        Schema::create('cafe_historico_pagamento', function (Blueprint $table) {
            $table->id('id_hp');
            $table->date('dataPagamento_hp');
            $table->date('dataVencimento_hp');
            $table->enum('tipoPagamento_hp', ['Cartão', 'Pix', 'Boleto']);
            $table->integer('numeroFatura_hp')->unique();
            $table->unsignedBigInteger('fk_idUsuario_hp');
            $table->string('sistema_hp', 60);
            // $table->foreign('fk_idSistemaPagamento_hp')->references('')->on('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_historico_pagamento');
    }
};
