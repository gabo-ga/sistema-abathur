<?php

namespace Database\Factories;

use App\Models\Lote;
use App\Models\Medicamento;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LoteFactory extends Factory
{
    protected $model = Lote::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_lote' => $this->faker->unique()->numberBetween(1000, 9999),
            'fecha_fabricacion' => $this->faker->date(),
            'fecha_vencimiento' => $this->faker->date(),
            'cantidad_inicial' => $this->faker->numberBetween(1, 100),
            'cantidad_actual' => $this->faker->numberBetween(1, 100),
            'medicamento_id' => Medicamento::pluck('id')->random(),
            'proveedor_id' => Proveedor::pluck('id')->random(),
        ];
    }
}
