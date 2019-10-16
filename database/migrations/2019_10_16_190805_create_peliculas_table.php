<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrepeli');
            $table->string('descripcion');
            $table->smallInteger('votos');  
            
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('categoria')->onDelete('cascade');

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
        Schema::dropIfExists('peliculas');
        $table->dropForeign(['genero_id']);
    }
}
