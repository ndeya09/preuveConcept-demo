<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('annee');
            $table->string('numeroCellulaire');
            $table->integer('numeroAppart');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('province');
            $table->date('dateArrivCan');
            $table->string('declarationAnnPrecedente');
            $table->string('occupation');
            $table->string('situationMatrimoniale');
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
        Schema::dropIfExists('declarations');
    }
}
