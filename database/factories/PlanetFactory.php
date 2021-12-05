<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanetFactory extends Factory
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
            'age' => $this->faker->numberBetween(20000,9999999),
            'description' => $this->faker->paragraph(10)
        ];
    }
}
