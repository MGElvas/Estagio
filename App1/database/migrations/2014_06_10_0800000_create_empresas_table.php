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
            $table->foreignId('user_id')->constrained('users');
            //estrangeira estados 1-1
            $table->integer('estado_id')->unsigned()->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');
            //$table->foreignId('estado_id')->constrained('estado_id');
            //estrangeira especialidades 1-n
            $table->integer('especialidade_id')->unsigned()->nullable();
            $table->foreign('especialidade_id')->references('id')->on('especialidades');
            //$table->foreignId('especialidade_id')->constrained('especialidade_id');

            //qual era o problema com as chaves estrangeiras? nao sei. mas funciona.
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
