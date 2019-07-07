<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilitanteOrgaoCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('militante_orgao_cargo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cargo_id');
            $table->foreign('cargo_id')->references('id')->on('cargo');
            $table->unsignedBigInteger('militante_orgao_id');
            $table->foreign('militante_orgao_id')->references('id')->on('militante_orgao');
            $table->date('data_inicio');
            $table->date('data_fim');
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
        Schema::dropIfExists('militante_orgao_cargo');
    }
}
