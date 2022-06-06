<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'marca' => $this->faker->word(),
            'codigo' => $this->faker->numerify('user-####'),
            'sku' => $this->faker->numerify('user-####'),
            'descripcion' => $this->faker->text(500),
            'costo' => $this->faker->randomFloat(2),
            'existencias' => $this->faker->randomNumber(5, false),
        ];
    }
}
