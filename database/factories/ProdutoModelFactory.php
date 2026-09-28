<?php

namespace Database\Factories;

use App\Models\ProdutoModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true), 
            'price' => fake()->randomFloat(2, 10, 500), 
            'expiration_date' => fake()->dateTimeBetween('now', '+2 years'),
        ];
    }
}