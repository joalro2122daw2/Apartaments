<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLloguersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lloguers', function (Blueprint $table) {
            $table->string('Dni');
            $table->foreign('Dni')->references('Dni')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Codi_unic');
            $table->foreign('Codi_unic')->references('Codi_unic')->on('apartaments')->onDelete('cascade')->onUpdate('cascade');
            $table->date('Datainici');
            $table->integer('Horainici');
            $table->date('Datafi');
            $table->integer('Horafi');
            $table->string('Lloclliuclaus');
            $table->string('Llocdevclaus');
            $table->integer('Preudia');
            $table->boolean('Diposit');
            $table->integer('Quantdiposit');
            $table->enum('Tipusasseguranca', ['Franquicia_fins_a_1000_Euros', 'Franquicia_fins_500_Euros', 'Sense_franquicia']);
            $table->primary(['Dni','Codi_unic']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lloguers');
    }
}
