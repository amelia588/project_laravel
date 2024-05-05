<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,  // Esto está bien si siempre quieres que el user_id sea 1
            'title' => $this->faker->sentence,  // Usa $this->faker en lugar de $faker
            'slug' => $this->faker->slug,  // Opcional, si quieres generar un slug también
            'body' => $this->faker->text(800),
            'imagen' => $this->faker->imageUrl(),  // Opcional, generar una URL de imagen falsa
            'iframe' => null  // Opcional, dependiendo de si quieres añadir algo aquí
        ];
    }
}
