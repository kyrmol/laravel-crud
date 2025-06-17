<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boodschap>
 */
class BoodschapFactory extends Factory
{
    public function definition(): array
    {
        $faker = FakerFactory::create('nl_NL'); 

        return [
            'name' => $faker->firstName,
            'email' => $faker->email,
            'boodschap' => $faker->realText(150),
            'straat' => $faker->streetName,
            'huisnummer' => $faker->numberBetween(1, 1000),
        ];
    }
}
