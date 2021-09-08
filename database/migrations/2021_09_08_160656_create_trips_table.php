<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('destinazione',80);
            $table->string('mezzo_di_trasporto',50);
            $table->string('periodo',30);
            $table->string('durata',20);
            $table->text('programma_di_viaggio');
            $table->float('prezzo_per_persona',6,2);
            $table->string('tipologia',20);
            $table->tinyInteger('posti_disponibili')->unsigned()->default(1);
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
        Schema::dropIfExists('trips');
    }
}
