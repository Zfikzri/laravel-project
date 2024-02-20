<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         
            'nis' => $this->faker->unique()->numerify('#####'), 
            'nama' => $this->faker->name,
            'kelas' => $this->faker->numberBetween(1, 4),
            'tanggal_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address,
            'nohp' => $this->faker->randomNumber(5, true),
            
        ];
    }
}
