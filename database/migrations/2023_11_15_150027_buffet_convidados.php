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
        Schema::create('convidados', function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('cpf');
            $table->integer('idade');
            $table->ForeignUuId('id_festa');
            $table->boolean('presenca')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::DropIfExists('convidados');
    }
};
