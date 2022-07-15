<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // This auto creates a user, grabs the id and then populates
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->sentence(15),
            'body' => '<p>' . $this->faker->paragraph() . '</p>'
        ];
    }
}
