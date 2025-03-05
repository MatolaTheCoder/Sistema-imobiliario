<?php

namespace Database\Factories;

use App\Models\Casa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImagemCasa>
 */
class ImagemCasaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'casa_id' => Casa::inRandomOrder()->first()?->id ?? Casa::factory()->create()->id,
            'url' =>$this->faker->imageUrl(),
        ];
    }
}
