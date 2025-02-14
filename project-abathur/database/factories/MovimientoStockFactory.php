<?php

namespace Database\Factories;

use App\Models\Lote;
use App\Models\MovimientoStock;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovimientoStockFactory extends Factory
{
    protected $model = MovimientoStock::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_movimiento' => $this->faker->randomElement(['entrada', 'salida']),
            'cantidad' => $this->faker->numberBetween(1, 100),
            'motivo' => $this->faker->sentence(),
            'fecha_movimiento' => $this->faker->date(),
            'user_id' => User::pluck('id')->random(),
            'lote_id' => Lote::pluck('id')->random(),
        ];
    }
}
