<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Depto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = fake()->jobTitle();
        return [
            'idCarrera' => fake()->bothify("???###"),
            'nombreCarrera' => $titulo,
            'nombreMediano' => fake()->lexify(str_repeat("?",15)),
            'nombreCorto' => substr($titulo,0,5),
            'depto_id' => Depto::factory(),
        ];
    }
}