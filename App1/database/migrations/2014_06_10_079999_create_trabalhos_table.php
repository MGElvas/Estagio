<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhos',function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('estado');
            $table->string('nome',45)->unique();
            $table->string('descricao',220);

            //estrangeira condicaoTrabalho 1-1
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            //$table->foreignId('condicao_id')->constrained('condicoes_table');
            //estrangeira AreaTrabalho 1-1
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');
            //$table->foreignId('area_id')->constrained('areas_table');
            //estrangeira candidatos 1-1
            $table->integer('candidato_id')->unsigned();
            $table->foreign('candidato_id')->references('id')->on('candidatos');
            //$table->foreignId('candidato_id')->constrained('candidato_table');
            //estrangeira localizacao 1-1
            $table->integer('localizacao_id')->unsigned();
            $table->foreign('localizacao_id')->references('id')->on('localizacoes');
            //$table->foreignId('localizacao_id')->constrained('localizacao_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalhos');
    }
}
