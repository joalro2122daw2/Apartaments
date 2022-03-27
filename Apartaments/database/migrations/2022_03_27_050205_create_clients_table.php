<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('id');
            $table->string('Dni');
            $table->primary('Dni');
            $table->string('Nomcognoms');
            $table->integer('Edat');
            $table->integer('Tel');
            $table->string('Adreca');
            $table->string('Ciutat');
            $table->string('Pis');
            $table->string('Email');
            $table->enum('Tipustargeta', ['Debit', 'Credit']);
            $table->integer('Numtargeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
