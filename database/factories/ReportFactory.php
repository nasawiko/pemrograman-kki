<?php

namespace Database\Factories;

use Faker\UniqueGenerator;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 5)),
            'categories_id' => mt_rand(1, 4),
            'user_id' => mt_rand(1, 7),
            'deskripsi' => $this->faker->paragraph(mt_rand(10, 20)),
            'excerpt' => $this->faker->sentence(mt_rand(10, 15)),
            'slug' => $this->faker->slug(),
        ];
    }
}
