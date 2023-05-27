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
        Schema::create('cafe_usuario_habilidade', function (Blueprint $table) {
            $table->id('id_uh');
            $table->unsignedBigInteger('fk_idUsuario_uh');
            $table->unsignedBigInteger('fk_idHabilidade_uh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_usuario_habilidade');
    }
};
