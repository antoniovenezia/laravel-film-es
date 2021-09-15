<?php

use Illuminate\Database\Seeder;
use App\Film;
use Faker\Generator as Faker;

class films_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){

            $filmObject = new Film();
            $filmObject->titolo=$faker->sentence(3);
            $filmObject->data=$faker->date();
            $filmObject->trama=$faker->paragraph(2);
            $filmObject->cast=$faker->sentence();
            $filmObject->genere=$faker->word();
            $filmObject->copertina=$faker->imageUrl(640, 480, 'text', true);
            $filmObject->save();

        }
    }
}
