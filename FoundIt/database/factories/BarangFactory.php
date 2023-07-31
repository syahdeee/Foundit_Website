<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> $this->faker->sentence(2),
            'slug'=> $this->faker->slug(),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p)=>"<p>$p</p>")->implode(''),
            'kronologi' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p)=>"<p>$p</p>")->implode(''),
            'lokasi' => $this->faker->sentence(2),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3),
            'is_hilang' => mt_rand(0,1),
            'is_claim' => mt_rand(0,1),
            'is_hadiah' => false,
            'is_verif' => mt_rand(0,1),
            'is_tolak' => false
        ];
    }
}
