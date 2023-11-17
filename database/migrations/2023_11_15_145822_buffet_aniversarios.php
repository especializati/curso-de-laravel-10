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
            $table->ForeignId('id_festa');
            $table->string('nome_aniversariante');
            $table->boolean('estado');
            $table->dateTimeTz('data');
            $table->integer('n_convidados');
            $table->longText('pedido');
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
