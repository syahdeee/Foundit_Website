<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang'=> $this->faker->sentence(2),
            'slug'=> $this->faker->slug(),
            'user_id' => mt_rand(1,3),
            'nama_penerima'=> fake()->name(),
            'nim' => random_int(1000000000,9999999999),
            'jurusan' => $this->faker->sentence(2)

        ];
    }
}
