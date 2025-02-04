<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\siswa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->text(),
            'alamat' => fake()->text(),
        ];
    }
}
