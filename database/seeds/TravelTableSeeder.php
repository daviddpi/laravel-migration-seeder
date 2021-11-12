<?php

use App\Travel;
use Faker\Provider\Lorem;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $travel = new Travel();
            $travel->place = $faker->sentence(1);
            $travel->country = $faker->sentence(3);
            $travel->description = $faker->paragraph(3);
            $travel->price = $faker->randomNumber(4, true);
            $travel->image_url = $faker->imageUrl(300, 200, $travel->place, $travel->price);

            $travel->save();
        }
    }
}

