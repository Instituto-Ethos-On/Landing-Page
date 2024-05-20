<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => '#',
            'valor' => '3',
            'area' => 'Engenharia',
            'nome' => $this->faker->word(),
            'apresentacao' => $this->faker->paragraph(3),
            'duracao' => $this->faker->randomNumber(3),
            'objetivo' => $this->faker->paragraph(5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
