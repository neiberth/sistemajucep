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
        Schema::create('recursos_humanos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('telefone');
            $table->string('email')->nullable();
            $table->string('endereco');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->date('data_inicio');
            $table->string('validade')->nullable();
            $table->date('data_fim')->nullable();
            $table->string('funcao')->nullable();
            $table->string('setor')->nullable();
            $table->string('contrato');
            $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos_humanos');
    }
};
