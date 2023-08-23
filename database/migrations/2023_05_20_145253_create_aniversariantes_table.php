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
        Schema::create('aniversariantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('apelido',100);
            $table->char('sexo',1);
            $table->string('data_aniversario');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aniversariantes');
    }
};
