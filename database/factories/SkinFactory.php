<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\skin>
 */
class SkinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'raridade'=> $this->faker->word(),
            'cor'=> $this->faker->word(),
            'float'=> $this->faker->randomFloat(),
        ];
    }
}
