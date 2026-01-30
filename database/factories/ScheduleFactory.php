<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Pick a random property first so we can find its owner (agent)
        $property = Property::inRandomOrder()->first();

        return [
            'user_id' => User::where('role', 'user')->inRandomOrder()->first()->id ?? User::factory(),
            'property_id' => $property->id ?? 1,
            // Link to the agent who owns the property, or a random agent if property doesn't exist
            'agent_id' => $property ? $property->agent_id : User::where('role', 'agent')->inRandomOrder()->first()->id,
            
            'tour_date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'tour_time' => $this->faker->time('H:i'),
            'message' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['0', '1']), // 0=Pending, 1=Confirmed
        ];
    }
}