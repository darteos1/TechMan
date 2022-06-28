<?php

namespace Database\Factories;

use App\Models\Equipamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipamento>
 */
class EquipamentoFactory extends Factory
{
    protected $model = Equipamento::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'descricao' => $this->faker->text(),
            'foto' => 'Torno_Mecanico_500mm.png',
            'status' => $this->faker->randomElement(['ativo', 'inativo'])
        ];
    }
}
