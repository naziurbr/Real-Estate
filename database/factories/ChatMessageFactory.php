<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatMessage>
 */
class ChatMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Pick a random user to be the sender
        $sender = User::inRandomOrder()->first();
        
        // Pick a different random user to be the receiver
        $receiver = User::where('id', '!=', $sender->id)->inRandomOrder()->first() ?? User::factory();

        return [
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
            'message' => $this->faker->sentence(10),
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ];
    }
}