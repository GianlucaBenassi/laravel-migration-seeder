<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;


class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrip = new Trip();
            $newTrip->title = $faker->sentence();
            $newTrip->description = $faker->text();
            $newTrip->departure_date = $faker->date();
            $newTrip->return_date = $faker->date();
            $newTrip->places = $faker->numberBetween(1, 20);
            $newTrip->fly = $faker->numberBetween(0, 1);
            $newTrip->price = $faker->randomFloat(2, 40, 100000);
            $newTrip->save();
        }
    }
}