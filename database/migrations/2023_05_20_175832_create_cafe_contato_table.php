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
            $table->unsignedBigInteger('fk_idTipoContato_con');
            $table->unsignedBigInteger('fk_idUsuario_con');
            $table->timestamps();
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
