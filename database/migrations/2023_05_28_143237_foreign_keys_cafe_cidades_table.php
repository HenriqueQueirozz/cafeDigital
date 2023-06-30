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
        Schema::table('cafe_cidades', function (Blueprint $table) {
            $table->foreign('fk_idEstado_end')->references('id_est')->on('cafe_estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_cidades', function (Blueprint $table) {
            $table->dropForeign(['fk_idEstado_end']);
        });
    }
};
