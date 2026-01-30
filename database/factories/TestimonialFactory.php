<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            // Using a placeholder image for the person's photo
            'image' => 'uploads/testimonials/user' . $this->faker->numberBetween(1, 5) . '.png',
            'message' => $this->faker->paragraph(2),
        ];
    }
}