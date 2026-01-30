<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amenities>
 */
class AmenitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amenities_name' => $this->faker->unique()->randomElement([
                'Air Conditioning',
                'Swimming Pool',
                'Central Heating',
                'Laundry Room',
                'Gym',
                'Alarm',
                'Window Covering',
                'Internet',
                'Free WiFi',
                'Car Parking',
                'Garage',
                'Balcony',
                'Garden',
                'Security',
                'Pets Allow'
            ]),
        ];
    }
}