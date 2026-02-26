<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */

use App\Models\Post;
class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),  // случайный заголовок
            'content' => $this->faker->paragraph(), // случайный текст
        ];
    }
}
