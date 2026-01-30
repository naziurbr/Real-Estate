<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MultiImage>
 */
class MultiImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Pull a random property ID from the ones we just seeded
            'property_id' => Property::inRandomOrder()->first()->id ?? 1,
            
            // Generate a fake image URL or path
            'photo_name' => 'uploads/property/multi-image/' . $this->faker->numberBetween(1, 10) . '.jpg',
        ];
    }
}