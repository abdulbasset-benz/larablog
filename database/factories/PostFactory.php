<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence();
        $created_at = fake()->dateTimeBetween('-1 year');

        return [
            'title' => $title,
            'content' => fake()->paragraphs(asText:true),
            'slug' => Str::slug($title),
            'image' => fake()->imageUrl(),
            'status' => fake()->randomElement(['pending', 'on-review','published']),
            'user_id' => 1,
            'created_at' => $created_at,
            'updated_at' => $created_at
        ];
    }
}

