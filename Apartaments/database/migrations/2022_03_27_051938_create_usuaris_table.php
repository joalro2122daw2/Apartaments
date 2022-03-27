<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->string('Nomcognoms');
            $table->string('Email');
            $table->string('Contrasenya');
            $table->enum('Tipus', ['treballador', 'cap_de_departament']);
            $table->integer('Horaent');
            $table->integer('Horasort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
}
