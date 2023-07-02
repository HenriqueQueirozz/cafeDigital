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
        Schema::create('cafe_cidades', function (Blueprint $table) {
            $table->id('id_cid');
            $table->string('nome_cid', 35);
            $table->string('ibge_cid');
            $table->unsignedBigInteger('fk_idEstado_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_cidades');
    }
};
