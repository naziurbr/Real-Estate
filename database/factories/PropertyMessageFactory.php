<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyMessageFactory extends Factory
{
    public function definition(): array
    {
        // Get a random property to inquire about
        $property = Property::inRandomOrder()->first();

        return [
            'user_id' => User::where('role', 'user')->inRandomOrder()->first()->id ?? null,
            // Link to the agent who actually owns the property
            'agent_id' => $property ? $property->agent_id : User::where('role', 'agent')->inRandomOrder()->first()->id,
            'property_id' => $property->id ?? 1,
            
            'msg_name' => $this->faker->name(),
            'msg_email' => $this->faker->safeEmail(),
            'msg_phone' => $this->faker->phoneNumber(),
            'message' => $this->faker->paragraph(3),
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}