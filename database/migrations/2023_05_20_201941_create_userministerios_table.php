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
        Schema::create('userministerios', function (Blueprint $table) {
            $table->id();
            $table->string('selecioneMinisterio');
            $table->string('nome',100);
            $table->string('apelido',100);
            $table->integer('contacto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userministerios');
    }
};
