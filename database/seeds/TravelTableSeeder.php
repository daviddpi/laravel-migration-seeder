<?php

use App\Travel;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [

            [
                "place" => "Los Angeles",
                "country" => "California",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, sequi nesciunt velit porro vero dolore et, laborum sint maiores quod sapiente! Repellendus a eaque deserunt et earum dicta quisquam natus.",
                "price" => 890,
                "image_url" => "https://a.travel-assets.com/findyours-php/viewfinder/images/res70/475000/475457-Los-Angeles.jpg"
            ],

            [
                "place" => "New York",
                "country" => "New York",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, sequi nesciunt velit porro vero dolore et, laborum sint maiores quod sapiente! Repellendus a eaque deserunt et earum dicta quisquam natus.",
                "price" => 1780,
                "image_url" => "https://www.corsiperbarman.it/wp-content/uploads/2021/03/lavorare-a-new-york.jpg"
            ]
        ];

        foreach( $travels as $travel){
            $newTravel = new Travel();
            $newTravel->place = $travel["place"];
            $newTravel->country = $travel["country"];
            $newTravel->description = $travel["description"];
            $newTravel->price = $travel["price"];
            $newTravel->image_url = $travel["image_url"];

            $newTravel->save();


        }
    }
}

