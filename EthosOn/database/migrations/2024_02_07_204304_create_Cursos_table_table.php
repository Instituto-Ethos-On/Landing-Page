<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cursos_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('area');
            $table->text('apresentacao');
            $table->text('objetivo');
            $table->integer('duracao');
            $table->integer('preco');
            $table->string('image');
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
        Schema::dropIfExists('Cursos_table');
    }
}
