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
        Schema::create('convidados', function (Blueprint $table) {
            $table->id();
            $table->integer("id_festa");
            $table->string("nome_convidado");
            $table->integer("CPF");
            $table->integer("idade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convidados');
    }
};
