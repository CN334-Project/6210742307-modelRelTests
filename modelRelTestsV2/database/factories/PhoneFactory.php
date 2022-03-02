<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //"user_id", "updated_at", "created_at"
            'user_id' => $this->faker->name(),
            // 'updated_at' => $this->faker->name(),
            // 'created_at' => $this->faker->name(),

        ];
    }
}
