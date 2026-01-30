<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackagePlan>
 */
class PackagePlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Link to a random agent
            'user_id' => User::where('role', 'agent')->inRandomOrder()->first()->id ?? User::factory(),
            
            'package_name' => $this->faker->randomElement(['Starter', 'Business', 'Professional', 'Unlimited']),
            'package_credits' => (string)$this->faker->randomElement(['3', '10', '50', '100']),
            'package_amount' => (string)$this->faker->randomElement(['10', '50', '200', '500']),
            'created_at' => now(),
        ];
    }
}