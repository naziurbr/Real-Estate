<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wishlist>
 */
class WishlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Pull a random user who isn't necessarily an admin/agent
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            
            // Pull a random property to be on their wishlist
            'property_id' => Property::inRandomOrder()->first()->id ?? Property::factory(),
        ];
    }
}