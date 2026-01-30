<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyTypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type_name' => $this->faker->unique()->randomElement(['Residential', 'Commercial', 'Industrial', 'Apartment', 'Luxury']),
            'type_icon' => $this->faker->randomElement(['la-house', 'la-building', 'la-tree', 'la-home']),
        ];
    }
}