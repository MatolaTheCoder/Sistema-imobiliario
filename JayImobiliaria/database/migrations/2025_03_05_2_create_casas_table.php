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
        Schema::create('casas', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('preco_venda');
            $table->string('preco_aluguel');
            $table->string('complemento')->nullable();
            $table->string('largura')->nullable();
            $table->string('descricao')->nullable();
            $table->string('quartos');
            $table->string('banheiros');
            $table->string('mobiliado');
            $table->foreignId('estado_casa_id')->constrained();
            $table->string('descricao_mobilia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casas');
    }
};
