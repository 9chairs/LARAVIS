<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UniverseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'size_in_km' => $this->faker->numberBetween(1000000)
        ];
    }
}
