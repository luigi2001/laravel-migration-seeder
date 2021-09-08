<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i ++){
            $newTrip = new Trip();
            $newTrip->destinazione = 'New York';
            $newTrip->mezzo_di_trasporto = 'aereo';
            $newTrip->periodo = 'agosto';
            $newTrip->durata = rand(1,30) .'giorni';
            $newTrip->programma_di_viaggio = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam aliquid earum ipsam eligendi cum, dolores consectetur corrupti deleniti amet placeat modi possimus facere iusto, nesciunt aliquam blanditiis assumenda. Quas, est?';
            $newTrip->prezzo_per_persona = rand(100,10000);
            $newTrip->tipologia = 'viaggio';
            $newTrip->posti_disponibili = rand(1,50);
            $newTrip->save();
        }
    }
}
