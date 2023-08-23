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
        Schema::create('ministerio_registos', function (Blueprint $table) {
            $table->id();
            $table->string('novoMinisterio');
            $table->text('finalidade');
            $table->text('responsavelMinisterio');
            $table->text('responsavelAdjunto');
            $table->text('SectorGeral');
            $table->text('SectorMinisterio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ministerio_registos');
    }
};
