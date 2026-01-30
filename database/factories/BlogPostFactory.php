<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $title = $this->faker->sentence();
    return [
        'blog_cat_id' => \App\Models\BlogCategory::inRandomOrder()->first()->id ?? 1,
        'user_id' => \App\Models\User::where('role', 'admin')->inRandomOrder()->first()->id ?? 1,
        'post_title' => $title,
        'post_slug' => str()->slug($title),
        'post_image' => 'uploads/blog/default.jpg',
        'short_description' => $this->faker->paragraph(),
        'long_description' => $this->faker->text(1000),
        'post_tags' => 'house,luxury,sale', // Standard string format
    ];
}
}
