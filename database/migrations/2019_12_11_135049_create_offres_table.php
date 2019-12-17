<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('id_user');

            $table->foreign('id_user')->references('id')->on('users');
            $table->string('titre');
            $table->string('lieu_de_travail');
            $table->string('secteur');
            $table->string('description_de_poste');
            $table->integer('nombre_de_poste');
            $table->timestamp('date_de_publication')->nullable();
            $table->timestamp('date_limite')->nullable();
            $table->string('profil_recherche');
            $table->string('type_de_contrat');
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
        Schema::dropIfExists('offres');
    }
}
