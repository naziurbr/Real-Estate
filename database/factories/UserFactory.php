<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->name(),
        'username' => $this->faker->userName(),
        'email' => $this->faker->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password (or use Hash::make('123456'))
        'phone' => $this->faker->phoneNumber(),
        'address' => $this->faker->address(),
        'photo' => null, // You can add a placeholder image URL here later
        'role' => $this->faker->randomElement(['admin', 'agent', 'user']),
        'status' => 'active',
        'remember_token' => \Illuminate\Support\Str::random(10),
    ];
}

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function agent(): static
{
    return $this->state(fn (array $attributes) => [
        'role' => 'agent',
    ]);
}
}
