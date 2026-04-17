<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nim' => fake()->numerify('###########'),
            'prodi' => fake()->randomElement(['Informatika', 'Sistem Informasi', 'Bisnis Digital','Teknologi Informasi']),
            'semester' => fake()->numberBetween(1, 8),
            'kelas' => fake()->bothify('?##'),
            'alamat' => fake()->address()
        ];
    }
}