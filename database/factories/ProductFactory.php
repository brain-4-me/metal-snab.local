<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence,
            'price' => $this->faker->boolean ? $this->faker->numberBetween($min = 1, $max = 9999) : $this->faker->randomElement(['0',NULL]),
            'currency' => $this->faker->randomElement(['USD','RUB','EUR']),
            'image' => $this->faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg'])
        ];
    }
}
