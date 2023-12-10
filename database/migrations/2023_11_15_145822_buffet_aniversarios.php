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
        Schema::create('aniversarios', function(Blueprint $table){
            $table->ForeignUuid('id_festa')->default(0);
            $table->string('nome_aniversariante');
            $table->boolean('estado')->default(false);
            $table->dateTimeTz('data');
            $table->integer('n_convidados');
            $table->integer('idade_aniversariante')->default(0);
            $table->integer('pedido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::DropIfExists('aniversarios');
    }
};
