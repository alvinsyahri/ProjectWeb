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
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'deskripsi' =>$this->faker->paragraph(),
            'image' => mt_rand(1,3).'.jpeg',
            'category_id' => mt_rand(1,3),
            'harga' => 100000
        ];
    }
}
