<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'property_id' => \App\Models\Property::inRandomOrder()->first()->id ?? 1,
        'facility_name' => $this->faker->randomElement(['Hospital', 'Supermarket', 'School', 'Pharmacy', 'Bus Stop']),
        'distance' => $this->faker->numberBetween(1, 10) . ' km',
    ];
}
}
