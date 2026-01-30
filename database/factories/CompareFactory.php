<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compare>
 */
class CompareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Pull a random user (usually a 'user' role)
            'user_id' => User::where('role', 'user')->inRandomOrder()->first()->id ?? User::factory(),
            
            // Pull a random property to be added to the comparison list
            'property_id' => Property::inRandomOrder()->first()->id ?? Property::factory(),
        ];
    }
}