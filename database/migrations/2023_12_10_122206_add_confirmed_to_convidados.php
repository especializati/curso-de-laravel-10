<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('convidados', function (Blueprint $table) {
            $table->boolean('confirmed')->default(false);
        });
    }
    
    public function down()
    {
        Schema::table('convidados', function (Blueprint $table) {
            $table->dropColumn('confirmed');
        });
    }
    
};
