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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string("login");
            $table->date("data");
            $table->time("hora_inicial");
            $table->time("hora_final");
            $table->string("titulocomida");
            $table->integer("numeroconvidados");
            $table->integer("idadeaniversariante");
            $table->string("nomeaniversariante");
            $table->enum('status',['pendente','aprovado','negado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
