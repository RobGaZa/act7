<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CursosRobotica>
 */
class CursosRoboticaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'usuarios' => $this->faker->name(),
            'grupos' => $this->faker->name(),
            'cursos' => $this->faker->name(),
            'kits' => $this->faker->name(),
            //
        ];
    }
}
