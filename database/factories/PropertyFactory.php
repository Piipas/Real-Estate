<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->catchPhrase(),
            "type" => "Villa",
            "location" => $this->faker->city(),
            "latitude" => $this->faker->latitude($min = -90, $max = 90),
            "longitude" => $this->faker->longitude($min = -180, $max = 180),
            "price" => "400000",
            "description" => $this->faker->realText(),
            "bedroom" => 2,
            "bath" => 2,
            "kitchen" => 1,
        ];
    }
}
