<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
{
    return [
        'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
        'post_id' => BlogPost::inRandomOrder()->first()->id ?? BlogPost::factory(),
        'parent_id' => null,
        'subject' => $this->faker->sentence(),
        'message' => $this->faker->paragraph(),
        // 'status' => '1',  <-- Remove or comment this out!
    ];
}
}