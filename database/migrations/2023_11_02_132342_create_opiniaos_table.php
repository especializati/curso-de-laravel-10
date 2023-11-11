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
        Schema::create('opiniaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_aniversariante');
            $table->enum('resultado',['Muito bom','Bom','Regular','Ruim','Muito ruim']);
            $table->string('justifique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opiniaos');
    }
};
