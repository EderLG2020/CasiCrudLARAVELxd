<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practicante>
 */
class PracticanteFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('es_ES');
        return [
            "nombre" => $this->faker->name(),
            "edad" => $this->faker->numberBetween(18, 30),
            'correo_electronico' => $faker->unique()->safeEmail,
            "fecha_de_nacimiento" => $this->faker->date(),
            "carrera_tecnica" => $this->faker->jobTitle,
            "escuela" => $this->faker->company,
        ];
    }
}
