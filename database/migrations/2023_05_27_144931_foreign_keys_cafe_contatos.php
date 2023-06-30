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
        Schema::table('cafe_contatos', function (Blueprint $table) {
            $table->foreign('fk_idUsuario_con')->references('id')->on('cafe_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_contatos', function (Blueprint $table) {
            $table->dropForeign(['fk_idUsuario_con']);
        });
    }
};
