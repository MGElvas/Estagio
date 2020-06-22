<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empresas',function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email',60)->unique();
            $table->string('nome',45)->unique();
            $table->string('nTelemovel',16)->unique();
            $table->string('morada',180);
            $table->boolean('estado');
            $table->string('descricao',220);
            $table->string('cdPostal',16);
            $table->string('contacto',45)->unique();
            $table->string('nContribuinte',16)->unique();
            //estrangeira User 1-n
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('id')->on('users');
            //estrangeira Trabalhos 1-n
            $table->unsignedBigInteger('trabalho_id');
            $table->foreign('trabalho_id')->references('id')->on('trabalhos');
            //estrangeira estados 1-1
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            //estrangeira especialidades 1-n
            $table->unsignedBigInteger('especialidade_id');
            $table->foreign('especialidade_id')->references('id')->on('especilidades');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('empresas');
    }
}
