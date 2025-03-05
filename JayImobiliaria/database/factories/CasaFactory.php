<?php

namespace Database\Factories;

use App\Models\Casa;
use App\Models\EstadoCasa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Casa>
 */
class CasaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Casa::class;
    public function definition(): array
    {
        return [
            'endereco' =>$this->faker->address(),
            'cidade' =>$this->faker->city(),
            'bairro' =>$this->faker->word(),
            'preco_venda' =>$this->faker->randomFloat(2, 1000, 100000),
            'preco_aluguel'=>$this->faker->randomFloat(2, 1000, 100000),
            'complemento'=>$this->faker->word(),
            'largura' =>$this->faker->randomFloat(2, 1, 100),
            'descricao' =>$this->faker->sentence(),
            'quartos' =>$this->faker->randomDigit(),
            'banheiros' =>$this->faker->randomDigit(),
            'mobiliado' =>$this->faker->boolean(),
            'estado_casa_id' => EstadoCasa::inRandomOrder()->first()?->id ?? EstadoCasa::factory()->create()->id,
            'descricao_mobilia' =>$this->faker->sentence(),
        ];
    }
}
