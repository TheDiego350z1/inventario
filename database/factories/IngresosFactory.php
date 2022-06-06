<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingresos>
 */
class IngresosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ingreso_no' => $this->faker->randomNumber(5, false),
            'id_proveedor' => rand(1,10),
            'id_producto' => rand(1,200),
            'factura' => $this->faker->randomNumber(5, false),
            'cantidad' => $cantidad = rand(1,100),
            'costo' => $costo = $this->faker->randomFloat(2),
            'total' => ($cantidad * $costo),
            'fecha_ingreso' => $this->faker->date(),
        ];
    }
}
