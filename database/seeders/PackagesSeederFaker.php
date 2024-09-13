<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Package;

class PackagesSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20; $i++) {
            $new_package = new Package();
            $new_package->destination = $faker->city();
            $new_package->description = $faker->paragraph();
            $new_package->price = $faker->randomFloat(2, 500, 5000);
            $new_package->days = $faker->numberBetween(3, 14);
            $new_package->accommodation = $faker->randomElement(['Hotel', 'Appartamento', 'Ostello']);
            $new_package->transport = $faker->randomElement(['Aereo', 'Treno', 'Autobus']);
            $new_package->departure_location = $faker->city;
            $new_package->departure_date = $faker->dateTimeBetween('+1 week', '+2 months');
            $new_package->return_date = $faker->dateTimeBetween('+2 months', '+3 months');
            $new_package->max_participants = $faker->numberBetween(2, 20);

            $new_package->save();
        }
    }
}
