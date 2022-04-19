<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'zip_code' => $this->faker->postcode,
            'prefecture' =>$this->faker->prefecture,
            'city' =>$this->faker->city,
            'address' => $this->faker->streetAddress   
        ];
    }
}
