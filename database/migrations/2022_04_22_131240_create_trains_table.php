<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->string('azienda', 50);
            $table->string('staione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->string('data_partenza', 15);
            $table->string('orario_partenza', 10);
            $table->string('orario_arrivo', 10);
            $table->string('codice_treno', 6);
            $table->float('prezzo_biglietto', 5,2); //999.99
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->id();
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
        Schema::dropIfExists('trains');
    }
}
