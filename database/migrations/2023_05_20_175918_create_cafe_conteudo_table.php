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
        Schema::create('cafe_conteudo', function (Blueprint $table) {
            $table->id('id_con');
            $table->string('link_con', 150);
            $table->string('titulo_con', 100);
            $table->text('descricao_con');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_conteudo');
    }
};
