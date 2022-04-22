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

        $train->azienda = $faker->randomElement($aziende);
        $train->stazione_di_partenza = $faker->randomElement($stazioni);
        $train->stazione_di_arrivo = $faker->randomElement($stazioni);
        $train->data_partenza = $faker->date();
        $train->orario_partenza = $faker->time();
        $train->orario_arrivo = $faker->time();
        $train->codice_treno = $faker->randomNumber(4, true);
        $train->prezzo_biglietto = $faker->randomFloat(2, 10, 999);
        $train->numero_carrozze = $faker->numberBetween(1, 10);

        $train->save();
    }
}
