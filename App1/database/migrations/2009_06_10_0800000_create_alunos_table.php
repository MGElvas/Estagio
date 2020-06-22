<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos',function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome',24);
            //estrangeira estados
            $table->foreignId('estado_id')->constrained('estados_table');
            //estrangeira candidatos 1-1
            $table->foreignId('candidato_id')->constrained('candidato_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
