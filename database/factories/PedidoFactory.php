<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente'=> $this->faker->word(),
            'quantidade'=> $this->faker->randomNumber(2, true),
            'contato'=> $this->faker->randomNumber(8, true),
        ];
    }
}
