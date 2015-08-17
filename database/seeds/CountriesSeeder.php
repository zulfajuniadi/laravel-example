<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Malaysia'
            ],
            [
                'name' => 'Singapore'
            ],
            [
                'name' => 'United States'
            ]
        ];
        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
