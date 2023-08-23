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
        Schema::create('casamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_noiva');
            $table->string('apelido_noiva');
            $table->string('nacionalidade_noiva');
            $table->integer('contacto_noiva');
            $table->char('estado_civil_noiva');
            $table->string('batizada');
            $table->string('local_batizada');
            $table->string('nucleo_noiva');


            $table->string('nome_noivo');
            $table->string('apelido_noivo');
            $table->string('nacionalidade_noivo');
            $table->integer('contacto_noivo');
            $table->char('estado_civil_noivo');
            $table->string('batizado');
            $table->string('local_batizado');
            $table->string('nucleo_noivo');
            $table->string('data_casamento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casamentos');
    }
};
