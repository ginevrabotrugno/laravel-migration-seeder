<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = config('packages');

        foreach ($packages as $package) {
            $new_package = new Package();
            $new_package->destination = $package['destination'];
            $new_package->description = $package['description'];
            $new_package->price = $package['price'];
            $new_package->days = $package['days'];
            $new_package->accommodation = $package['accommodation'];
            $new_package->transport = $package['transport'];
            $new_package->departure_location = $package['departure_location'];
            $new_package->departure_date = $package['departure_date'];
            $new_package->return_date = $package['return_date'];
            $new_package->max_participants = $package['max_participants'];

            $new_package->save();

        }

    }
}
