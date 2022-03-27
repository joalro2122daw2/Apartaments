<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartaments', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('Referenciacatastral');
            $table->string('Ciutat');
            $table->string('Barri');
            $table->string('Nomcarrer');
            $table->integer('Numcarrer');
            $table->string('Pis');
            $table->integer('Nombrellits');
            $table->integer('Nombrehabitacions');
            $table->boolean('Ascensor');
            $table->enum('Calefaccio', ['Electrica', 'Gas_Natural', 'Buta']);
            $table->boolean('Airecondicionat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartaments');
    }
}
