<?php

namespace Database\Factories;

use App\Models\EstadoCasa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstadoCasa>
 */
class EstadoCasaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EstadoCasa::class;
    public function definition(): array
    {
        return [
            'estado' => $this->faker->word(),
        ];
    }
}
