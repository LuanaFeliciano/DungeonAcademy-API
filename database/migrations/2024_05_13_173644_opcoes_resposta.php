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
        Schema::create("opcoes_resposta", function (Blueprint $table) {
            $table->id(); // Implicitly increments
            $table->unsignedBigInteger("id_pergunta"); // Consider unsigned if storing positive IDs
            $table->foreign('id_pergunta')->references('id')->on('perguntas');
            $table->text("descricao");
            $table->boolean("correta");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcoes_resposta');
    }
};
