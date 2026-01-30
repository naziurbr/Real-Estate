<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $category = $this->faker->unique()->randomElement([
        'Real Estate Tips', 
        'Home Decor', 
        'Market Updates', 
        'Buying Guide', 
        'Property Investment'
    ]);

    return [
        'category_name' => $category,
        'category_slug' => str()->slug($category),
    ];
}
}
