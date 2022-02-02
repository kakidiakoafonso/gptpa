<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpas', function (Blueprint $table) {
            $table->id();
            $table->string("idPos");
            $table->string("descricao");
            $table->string("marca");
            $table->string("modelo");
            $table->string("cor");
            $table->string("numero_serie");
            $table->string("estado");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tpas');
    }
}
