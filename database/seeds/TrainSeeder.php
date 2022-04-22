<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();

        $aziende =['Trenitalia S.p.A', 'Thello S.A.S', 'Trenord', 'Italo NTV', 'SNCF Voyage Italia'];
        $stazioni = [
            'Bari Centrale', 
            'Bologna Centrale', 
            'Firenze', 
            'Genova P. Principe',
            'Milano Centrale',
            'Napoli Centrale',
            'Palermo Centrale',
            'Roma Termini',
            'Torino Porta Nuova',
            'Venezia Santa Lucia'
        ];

        // proprieta

        

        $train->save();
    }
}
