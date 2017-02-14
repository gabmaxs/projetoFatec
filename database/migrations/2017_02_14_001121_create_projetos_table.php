<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('descricao', 30);
            $table->string('ambito', 4);
            $table->string('categoria', 4);
            $table->string('eixo', 4);
            $table->text('cronograma');
            $table->text('comentarios_prof');
            $table->text('ancora');
            $table->text('questao_motriz');
            $table->string('n_alunos', 2);
            $table->string('prazo', 2);
            $table->text('feedback');
            $table->text('resultado');
            $table->string('tags', 150);
            $table->integer('total_visualizacao');
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
        Schema::dropIfExists('projetos');
    }
}
