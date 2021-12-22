<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
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
            'user_id' => mt_rand(1, 5),
            'datestart' => $this->faker->dateTimeBetween('now'),
            'dateend' => $this->faker->dateTimeBetween('now', '+5 month'),
            'deskripsi' => $this->faker->paragraph(mt_rand(10, 20)),
            'excerpt' => $this->faker->sentence(mt_rand(10, 15)),
            'slug' => $this->faker->slug(),
        ];
    }
}
