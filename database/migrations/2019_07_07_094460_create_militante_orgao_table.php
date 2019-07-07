<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilitanteOrgaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('militante_orgao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('militante_id');
            $table->foreign('militante_id')->references('id')->on('militante');
            $table->unsignedBigInteger('orgao_id');
            $table->foreign('orgao_id')->references('id')->on('orgao');
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
        Schema::dropIfExists('militante_orgao');
    }
}
