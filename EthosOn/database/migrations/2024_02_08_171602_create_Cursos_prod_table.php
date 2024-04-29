<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosProdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cursos_prod', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('area');
            $table->integer('cl')->nullable();
            $table->longText('apresentacao');
            $table->longText('objetivo');
            $table->integer('duracao');
            $table->longText('conteudo');
            $table->integer('total');
            $table->decimal('preco', 12, 2);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('Cursos_prod');
    }
}
