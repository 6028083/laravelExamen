<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_title' => $this->faker->sentence(),
            'post_slug' => $this->faker->slug(),
            'post_content' => $this->faker->paragraph(),
            'featured_image' => 'https://picsum.photos/200/200',  // Dummy image URL
        ];
    }
}
